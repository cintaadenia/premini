<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;



class SpendingController extends Controller
{
    public function index()
    {
        $spending = Order::get();
        return view('pengguna.spending', compact('spending'));
    }

}
