<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        $data['tasks'] = $model
            ->where('is_archived', 0)
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('tasks', $data);
    }

    public function new()
    {
        return view('tasks/new');
    }

    public function create()
    {
        $rules = [
            'title'     => 'required',
            'task_date' => 'required'
        ];

        if (!$this->validate($rules)) {
            return view('tasks/new', [
                'validation' => $this->validator
            ]);
        }

        $model = new TaskModel();

        $model->insert([
            'title'       => $this->request->getPost('title'),
            'status'      => $this->request->getPost('status'),
            'task_date'   => $this->request->getPost('task_date'),
            'is_archived' => 0,
            'created_at'  => date('Y-m-d H:i:s')
        ]);

        return redirect()->to(site_url('tasks'));
    }

    public function edit($id)
    {
        $model = new TaskModel();

        $task = $model
            ->where('is_archived', 0)
            ->find($id);

        if (!$task) {
            return redirect()->to(site_url('tasks'));
        }

        return view('tasks/edit', [
            'task' => $task
        ]);
    }

    public function update($id)
    {
        $rules = [
            'title'     => 'required',
            'task_date' => 'required'
        ];

        if (!$this->validate($rules)) {
            $model = new TaskModel();

            return view('tasks/edit', [
                'task'       => $model->find($id),
                'validation' => $this->validator
            ]);
        }

        $model = new TaskModel();

        $model->update($id, [
            'title'     => $this->request->getPost('title'),
            'status'    => $this->request->getPost('status'),
            'task_date' => $this->request->getPost('task_date')
        ]);

        return redirect()->to(site_url('tasks'));
    }

    public function delete($id)
    {
        $model = new TaskModel();

        $model->update($id, [
            'is_archived' => 1
        ]);

        return redirect()->to(site_url('tasks'));
    }
}