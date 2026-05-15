<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

Route::get('/post/all/{order?}/{dir?}', [PostController::class, 'getAll']);
Route::get('/post/new', [PostController::class, 'newPost']);
Route::get('/post/{id}', [PostController::class, 'getOne'])->where(['id' => '[0-9]+']);
Route::match(['get', 'post'], 'post/edit/{id}', [PostController::class, 'editPost']);
Route::match(['get', 'post'], 'post/del/{id}', [PostController::class, 'delPost']);
Route::match(['get', 'post'], 'post/rest/{id}', [PostController::class, 'restorePost']);
Route::get('post/deleted', [PostController::class, 'getDeletedPost']);
Route::get('/users', [UserController::class, 'getAll']);

