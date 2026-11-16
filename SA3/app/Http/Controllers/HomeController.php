<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $today = today();
        $tasks = Task::forToday()
            ->orderBy('title')
            ->get();

        return view('pages.welcome', compact('tasks', 'today'));
    }
}
