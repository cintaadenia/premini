<?php

namespace App\Http\Controllers;

use App\Models\Dimsum;
use App\Models\Drink;
use App\Models\Food;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index(){
        $countFood = Food::count();
        $countDimsum = Dimsum::count();
        $countDrink = Drink::count();
        return view('dashboard.dashboard', compact('countFood', 'countDrink', 'countDimsum'));
    }
}
