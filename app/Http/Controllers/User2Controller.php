<?php

namespace App\Http\Controllers;

use App\Models\Dimsum;
use App\Models\Drink;
use App\Models\Food;
use Illuminate\Http\Request;

class User2Controller extends Controller
{
    public function user2(){
        $foods = Food::all();
        $drinks = Drink::all();
        $dimsums = Dimsum::all();
        return view('pengguna.user2', compact('foods', 'drinks', 'dimsums'));
    }

    public function drink(){
        $drinks = Drink::all();
        return view('pengguna.user2',compact('drinks'));

    }

    public function dimsum(){
        $dimsums = Dimsum::all();
        return view('pengguna.user2',compact('dimsums'));

    }

}
