<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TaskController::class,'index']);

Route::get('/tasks',[TaskController::class,'index']);

Route::get('/users', [UsersController::class, 'index']);

Route::get('/contact', [PagesController::class, 'contact']);

Route::get('/about', [PagesController::class, 'about']);
