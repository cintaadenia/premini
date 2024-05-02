<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;
use App\Models\Order;



class GrafikController extends Controller
{
    public function index()
    {
        $spending = Order::get();
        // dd($grafik); // Check if $grafik is populated correctly
        return view('pengguna.grafik', compact('spending'));
    }

}
