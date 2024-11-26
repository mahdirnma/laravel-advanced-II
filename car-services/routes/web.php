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
Route::get('/login',[UserController::class,'login'])->name('login.show');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[UserController::class,'register'])->name('register.show');
Route::post('/logout',[AuthController::class,'logout'])->name('logout');

Route::get('/',[UserController::class,'index'])->name('index')->middleware('auth');
Route::get('/services',[UserController::class,'services'])->name('services')->middleware('auth');
Route::post('/services/set',[UserController::class,'service_set'])->name('service.set')->middleware('auth');

