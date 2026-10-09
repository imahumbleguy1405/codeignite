<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function login()
    {
        if (session()->get('isLoggedIn')) {
            return redirect()->to(site_url('customers'));
        }

        return view('auth/login');
    }

    public function authenticate()
    {
        $username = trim($this->request->getPost('username'));
        $password = $this->request->getPost('password');

        $model = new UserModel();

        $user = $model
            ->where('username', $username)
            ->first();

        if (
            !$user ||
            !password_verify(
                $password,
                $user['password'] ?? ''
            )
        ) {
            return redirect()
                ->back()
                ->withInput()
                ->with(
                    'error',
                    'Invalid username or password.'
                );
        }

        session()->regenerate();

        session()->set([
            'user_id'    => $user['id'],
            'username'   => $user['username'],
            'full_name'  => $user['full_name'],
            'isLoggedIn' => true
        ]);

        $redirectUrl = session()->get('redirect_url');

        session()->remove('redirect_url');

        if (!$redirectUrl) {
            $redirectUrl = site_url('customers');
        }

        return redirect()->to($redirectUrl);
    }

    public function logout()
    {
        session()->destroy();

        return redirect()->to(site_url('login'));
    }
}