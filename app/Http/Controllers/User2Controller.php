<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class User2Controller extends Controller
{
    public function user2(){
        $foods = Food::all();
        return view('pengguna.user2', compact('foods'));
    }
}
