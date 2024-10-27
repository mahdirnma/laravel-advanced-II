<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PicController;
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

Route::resource('tags', TagController::class)->except(['show'])->middleware('auth');
Route::resource('categories', CategoryController::class)->except(['show'])->middleware('auth');
Route::resource('pics', PicController::class)->except(['show'])->middleware('auth');
Route::resource('blogs', BlogController::class)->except(['show'])->middleware('auth');
Route::get('/blogs/editTag/{blog}', [BlogController::class, 'editTag'])->name('editTag');
Route::put('/blogs/updateTag/{blog}', [BlogController::class, 'updateTag'])->name('updateTag');
Route::get('/blogs/editImage/{blog}', [BlogController::class, 'editImage'])->name('editImage');
Route::put('/blogs/updateImage/{blog}', [BlogController::class, 'updateImage'])->name('updateImage');

Route::get('/user', [UserController::class, 'userIndex'])->name('user.index');
Route::get('/user/blog/{blog}', [UserController::class, 'blogSingle'])->name('blog.single');
Route::get('/user/tag/{tag}', [UserController::class, 'tagBlogs'])->name('tag.blog');
Route::get('/user/category/{category}', [UserController::class, 'categoryBlogs'])->name('category.blog');


