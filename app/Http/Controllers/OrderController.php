<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Checkout;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pengguna.user2');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(OrderRequest $request)
    {
            $order = Order::create([
                'noTelepon' => $request->noTelepon,
                'makanan' => $request->makanan,
                'level' => $request->level,
                'minuman' => $request->minuman,
                'dimsum' => $request->dimsum,
                'catatan' => $request->catatan,

            ]);

            Checkout::create([
                'user_id' => auth()->user()->id,
                'order_id' => $order->id,
            ]);

            return redirect()->back()->with('success', 'Anda Berhasil Order');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resou   rce from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
