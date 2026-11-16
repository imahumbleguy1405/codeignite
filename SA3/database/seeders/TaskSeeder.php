<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run(): void
    {
        $yesterday = today()->subDay()->toDateString();
        $today = today()->toDateString();
        $tomorrow = today()->addDay()->toDateString();

        $tasks = [
            ['title' => 'Review last week’s lecture notes', 'status' => 'completed', 'task_date' => $yesterday],
            ['title' => 'Organize project files', 'status' => 'completed', 'task_date' => $yesterday],
            ['title' => 'Finish the Laravel task list page', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Check the database migration', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Prepare notes for the next class', 'status' => 'in progress', 'task_date' => $today],
            ['title' => 'Back up the project folder', 'status' => 'pending', 'task_date' => $today],
            ['title' => 'Read the Eloquent documentation', 'status' => 'pending', 'task_date' => $tomorrow],
            ['title' => 'Plan the next study session', 'status' => 'pending', 'task_date' => $tomorrow],
        ];

        foreach ($tasks as $task) {
            Task::updateOrCreate(['title' => $task['title']], $task);
        }
    }
}
