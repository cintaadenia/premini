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
        $spending = Order::where('users_id', auth()->id())->get();
        return view('pengguna.spending', compact('spending'));
    }

}
