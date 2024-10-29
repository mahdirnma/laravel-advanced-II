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

Route::get('login', [UserController::class, 'login'])->name('login.show');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::prefix('/admin')->middleware('auth')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('home');
    Route::resource('tags', TagController::class)->except(['show']);
    Route::resource('categories', CategoryController::class)->except(['show']);
    Route::resource('pics', PicController::class)->except(['show']);
    Route::resource('blogs', BlogController::class)->except(['show']);
    Route::get('/blogs/editTag/{blog}', [BlogController::class, 'editTag'])->name('editTag');
    Route::put('/blogs/updateTag/{blog}', [BlogController::class, 'updateTag'])->name('updateTag');
    Route::get('/blogs/editImage/{blog}', [BlogController::class, 'editImage'])->name('editImage');
    Route::put('/blogs/updateImage/{blog}', [BlogController::class, 'updateImage'])->name('updateImage');
});
Route::get('/', [UserController::class, 'userIndex'])->name('user.index');
Route::get('/blog/{blog}', [UserController::class, 'blogSingle'])->name('blog.single');
Route::get('/tag/{tag}', [UserController::class, 'tagBlogs'])->name('tag.blog');
Route::get('/category/{category}', [UserController::class, 'categoryBlogs'])->name('category.blog');
