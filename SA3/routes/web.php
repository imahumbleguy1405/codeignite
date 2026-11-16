<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/tasks', [TasksController::class, 'index'])->name('tasks.index');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/about', [AboutController::class, 'index'])->name('about');
