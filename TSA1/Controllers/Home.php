<?php

namespace App\Controllers;

use App\Models\TaskModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new TaskModel();

        $data['tasks'] = $model
            ->where('task_date', date('Y-m-d'))
            ->findAll();

        return view('welcome', $data);
    }
}