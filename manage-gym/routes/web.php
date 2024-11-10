<?php

use App\Http\Controllers\AuthController;
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
Route::get('/admin',[UserController::class,'index'])->name('index')->middleware(['auth','checkRole']);
Route::get('/login',[UserController::class,'login'])->name('login.show');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[UserController::class,'register'])->name('register.show');
Route::post('/register',[AuthController::class,'register'])->name('register');

Route::resource('subcriptions', 'SubcriptionController');

Route::get('/',[UserController::class,'home'])->name('home')->middleware('auth');

