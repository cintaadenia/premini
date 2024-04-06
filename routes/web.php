<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\User2Controller;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('pengguna.index');
});

Route::get('/user2', [User2Controller::class, 'user2'])->name('user2');

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/dashboard', [dashboardController::class, 'index']);

//LOGOUT
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/log', [LoginController::class, 'login'])->name('login.store');

//REGISTER
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/regist', [RegisterController::class, 'store'])->name('register.store');
