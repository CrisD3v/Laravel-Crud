<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TodoController;

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
Route::view('/login', 'User.Login')->name('login')->middleware('guest');

Route::view('/', 'Home');

Route::resource('user', UserController::class)->middleware('auth');

//Autenticate Admin
Route::controller('user', UserController::class)->group(function () {
    Route::get('user/create', [UserController::class, 'create'])->middleware('guest');
    Route::post('user', [UserController::class, 'store'])->middleware('guest');
});

Route::resource('todo', TodoController::class)->middleware('auth');

Route::post('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');

Route::post('/logout', [LoginController::class, 'logout']);


