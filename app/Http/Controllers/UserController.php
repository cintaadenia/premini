<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Dimsum;
use App\Models\Drink;

class UserController extends Controller
{
    public function foods(){
        $foods = Food::get();
        $dimsums = Dimsum::get();
        $drinks = Drink::get();
        return view('pengguna.index',compact('foods', 'dimsums', 'drinks'));
    }


    public function dimsums(){
        $dimsums = Dimsum::get();
        return view('pengguna.index',compact('dimsums'));
    }


    public function drinks(){
        $drinks = Drink::get();
        return view('pengguna.index',compact('drinks'));
    }
}
