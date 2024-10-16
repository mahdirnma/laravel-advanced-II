<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [UserController::class, 'index'])->name('home')->middleware('auth');
Route::get('login', [UserController::class, 'login'])->name('login.show');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('posts', PostController::class)->middleware('auth');
Route::get('/posts/addTag/{post}', [PostController::class, 'addTag'])->name('addTag')->middleware('auth');
Route::post('/posts/createTag/{post}', [PostController::class, 'createTag'])->name('createTag')->middleware('auth');
Route::get('/posts/editTag/{post}', [PostController::class, 'editTag'])->name('editTag')->middleware('auth');
Route::put('/posts/updateTag/{post}', [PostController::class, 'updateTag'])->name('updateTag')->middleware('auth');

Route::resource('tags', TagController::class)->except('show')->middleware('auth');
Route::resource('categories', CategoryController::class)->except('show')->middleware('auth');
Route::resource('images', ImageController::class)->except(['show'])->middleware('auth');

