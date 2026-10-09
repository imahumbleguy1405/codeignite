<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Tasks extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        $data['tasks'] = $model
            ->orderBy('task_date', 'ASC')
            ->findAll();

        return view('tasks', $data);
    }
}