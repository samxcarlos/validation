<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserTaskController;
Route::get('/', function () {
    return view('welcome');
});

Route::resource('user_task', UserTaskController::class);