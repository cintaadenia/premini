<?php

namespace App\Http\Controllers;

use App\Models\Dimsum;
use App\Models\Drink;
use App\Models\Food;
use App\Models\Level;
use Illuminate\Http\Request;

class User2Controller extends Controller
{
    public function user2(){
        $foods = Food::all();
        $drinks = Drink::all();
        $dimsums = Dimsum::all();
        $levels = Level::all();
        return view('pengguna.user2', compact('foods', 'drinks', 'dimsums', 'levels'));
    }

    public function drink(){
        $drinks = Drink::all();
        return view('pengguna.user2',compact('drinks'));
    }

    public function dimsum(){
        $dimsums = Dimsum::all();
        return view('pengguna.user2',compact('dimsums'));
    }

    public function level(){
        $levels = Level::all();
        return view('pengguna.user2',compact('levels'));
    }
}
