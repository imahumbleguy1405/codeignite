<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        $data['users'] = $model->findAll();

        return view('users', $data);
    }

    public function new()
    {
        return view('users/new');
    }

    public function create()
    {
        $rules = [
            'username'  => 'required',
            'full_name' => 'required',
            'password'  => 'required|min_length[8]'
        ];

        if (!$this->validate($rules)) {
            return view('users/new', [
                'validation' => $this->validator
            ]);
        }

        $avatar = $this->uploadAvatar();

        $model = new UserModel();

        $model->insert([
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'password'  => password_hash(
                $this->request->getPost('password'),
                PASSWORD_DEFAULT
            ),
            'avatar'    => $avatar
        ]);

        return redirect()->to(
            site_url('users')
        );
    }

    public function edit($id)
    {
        $model = new UserModel();

        $data['user'] = $model->find($id);

        return view('users/edit', $data);
    }

    public function update($id)
    {
        $model = new UserModel();

        $user = $model->find($id);

        $avatar = $user['avatar'];

        $newAvatar = $this->uploadAvatar();

        if ($newAvatar !== null) {
            $avatar = $newAvatar;
        }

        $updateData = [
            'username'  => $this->request->getPost('username'),
            'full_name' => $this->request->getPost('full_name'),
            'avatar'    => $avatar
        ];

        $newPassword = $this->request->getPost('password');

        if (!empty($newPassword)) {
            $updateData['password'] = password_hash(
                $newPassword,
                PASSWORD_DEFAULT
            );
        }

        $model->update($id, $updateData);

        return redirect()->to(
            site_url('users')
        );
    }

    private function uploadAvatar()
    {
        $file = $this->request->getFile('avatar');

        if (
            !$file ||
            !$file->isValid() ||
            $file->hasMoved()
        ) {
            return null;
        }

        $allowedTypes = [
            'image/jpeg',
            'image/png'
        ];

        if (!in_array(
            $file->getMimeType(),
            $allowedTypes
        )) {
            return null;
        }

        if ($file->getSize() > 2048 * 1024) {
            return null;
        }

        $uploadPath = FCPATH . 'uploads/avatars';

        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0775, true);
        }

        $avatarName = $file->getRandomName();

        $file->move(
            $uploadPath,
            $avatarName
        );

        return $avatarName;
    }
}