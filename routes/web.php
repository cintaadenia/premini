<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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

Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/dashboard', [dashboardController::class, 'index']);

//LOGIN
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/log', [LoginController::class, 'login'])->name('login.store');

//REGISTER
Route::get('/', [RegisterController::class, 'index'])->name('register');
Route::post('/regist', [RegisterController::class, 'store'])->name('register.store');
