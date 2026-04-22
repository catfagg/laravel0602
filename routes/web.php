<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/post/all/{order?}', [PostController::class, 'getAll']);
Route::get('/post/{id}', [PostController::class, 'getOne'])->where(['post-id'=>'[0-9]+']);