<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Dimsum;
use App\Models\Drink;
use App\Models\Level;
use App\Models\Transaction;

class UserController extends Controller
{
    public function foods(){
        $foods = Food::get();
        $dimsums = Dimsum::get();
        $drinks = Drink::get();
        $levels = Level::get();
        $transaction = Transaction::get();
        return view('pengguna.index',compact('foods', 'dimsums', 'drinks', 'levels','transaction'));
    }


    public function dimsums(){
        $dimsums = Dimsum::get();
        return view('pengguna.index',compact('dimsums'));
    }


    public function drinks(){
        $drinks = Drink::get();
        return view('pengguna.index',compact('drinks'));
    }

    public function levels(){
        $levels = Level::get();
        return view('pengguna.index',compact('levels'));
    }
    public function transactions(){
        $transacton = Transaction::get();
        return view('pengguna.transaction',compact('transaction'));
    }
}
