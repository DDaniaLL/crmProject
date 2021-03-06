<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('welcome');
});

Route::resource('posts', PostController::class);

Route::resource('tags', TagController::class);

Route::resource('categories', CategoryController::class);

Route::resource('posts.comments', PostCommentController::class)->except(['show', 'index', 'create']);
