<?php

use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\DimsumController;
use App\Http\Controllers\DrinkController;
use App\Http\Controllers\EmailUserController;
use App\Http\Controllers\FoodController;
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

Route::middleware('auth')->group(function(){
    Route::get('/user2', [User2Controller::class, 'user2'])->name('user2');
    //LOGOUT
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::middleware(['role:admin', 'auth'])->group(function(){
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard.index');

    //Food
    Route::get('/food', [FoodController::class, 'index'])->name('food.index');
    Route::post('/food/create', [FoodController::class, 'create'])->name('food.create');
    Route::delete('/food/destroy/{id}', [FoodController::class, 'destroy'])->name('food.destroy');
    Route::put('/food/update/{id}', [FoodController::class, 'update'])->name('food.update');
    Route::get('/food/edit/{id}', [FoodController::class, 'edit'])->name('food.edit');



    //Drink
    Route::get('/drink', [DrinkController::class, 'index'])->name('drink.index');
    Route::post('/drink/create', [DrinkController::class, 'create'])->name('drink.create');
    Route::delete('/drink/destroy/{id}', [DrinkController::class, 'destroy'])->name('drink.destroy');
    Route::put('/drink/update/{id}', [DrinkController::class, 'update'])->name('drink.update');
    Route::get('/drink/edit/{id}', [DrinkController::class, 'edit'])->name('drink.edit');


    //Dimsum
    Route::get('/dimsum', [DimsumController::class, 'index'])->name('dimsum.index');
    Route::post('/dimsum/create', [DimsumController::class, 'create'])->name('dimsum.create');
    Route::delete('/dimsum/destroy/{id}', [DimsumController::class, 'destroy'])->name('dimsum.destroy');
    Route::put('/dimsum/update/{id}', [DimsumController::class, 'update'])->name('dimsum.update');
    Route::get('/dimsum/edit/{id}', [DimsumController::class, 'edit'])->name('dimsum.edit');


    //Checkout
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');

    //Email User
    Route::get('/emailUser', [EmailUserController::class, 'index'])->name('emailUser.index');



});



Route::middleware('guest')->group(function(){

    //LOGIN
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/log', [LoginController::class, 'login'])->name('login.store');

    //REGISTER
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/regist', [RegisterController::class, 'store'])->name('register.store');
});

