<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::resource('tasks', TaskController::class);
    Route::patch('tasks/{task}/complete', [TaskController::class, 'markCompleted'])->name('tasks.markCompleted');
});

Auth::routes();

Route::get('/home', [TaskController::class, 'index'])->name('home');
