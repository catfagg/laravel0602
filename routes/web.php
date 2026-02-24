<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;

Route::get('/user', [UserController::class, 'show']);
Route::get('/user/all', [UserController::class, 'all']);
Route::get('/user/:name');
Route::get('/user/:surname/:name');
Route::get('/show', [PostController::class, 'show']);