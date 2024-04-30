<?php

namespace App\Http\Controllers;

use App\Models\Dimsum;
use App\Models\Drink;
use App\Models\Food;
use App\Models\Level;
use App\Models\Transaction;
use Illuminate\Http\Request;

class User2Controller extends Controller
{
    public function user2(){
        $foods = Food::get();
        $drinks = Drink::get();
        $dimsums = Dimsum::get();
        $levels = Level::get();

        return view('pengguna.user2', compact('foods', 'drinks', 'dimsums', 'levels'));
    }

    public function drink(){
        $drinks = Drink::get();
        return view('pengguna.user2',compact('drinks'));
    }

    public function dimsum(){
        $dimsums = Dimsum::get();
        return view('pengguna.user2',compact('dimsums'));
    }

    public function level(){
        $levels = Level::get();
        return view('pengguna.user2',compact('levels'));
    }
    public function grafik(){
        return view('pengguna.grafik');
}
}
