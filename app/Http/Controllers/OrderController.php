<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Checkout;
use App\Models\Order;
use App\Models\User;
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

    public function order()
    {
        $order = Order::get();
        return view('pengguna.order', compact('order'));
    }

    // app/Http/Controllers/UserController.php



    /**
     * Show the form for creating a new resource.
     */
    public function create(OrderRequest $request)
    {
        // dd($request->all());
            $order = Order::create([
                'noTelepon' => $request->noTelepon,
                'food_id' => $request->makanan,
                'levels_id' => $request->level,
                'drinks_id' => $request->minuman,
                'dimsums_id' => $request->dimsum,
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
    public function show(Order $id)
    {
        {
            $user = User::find($id);
            $status = $user->status;

            return view('user.show', compact('user', 'status'));
        }
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
