<?php

namespace App\Http\Controllers;

use App\Models\Dimsum;
use App\Models\Drink;
use App\Models\Food;
use App\Models\User;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        $countFood = Food::count();
        $countDimsum = Dimsum::count();
        $countDrink = Drink::count();
        $countUser = User::count();
        return view('dashboard.dashboard', compact('countFood', 'countDrink', 'countDimsum', 'countUser'));
    }
}
