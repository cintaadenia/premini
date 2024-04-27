<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Services\CallbackService;

class PaymentCallbackController extends Controller
{
    public function receive(Request $request)
    {
        // dd($request->all());
    }
}
