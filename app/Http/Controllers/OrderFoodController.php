<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Order;
use App\Models\OrderFood;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;

class OrderFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::get();
        $orders = Order::get();
        return view('pengguna.user2', compact('foods', 'orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

            $request->validate(OrderFood::rules());

            $orderFood = OrderFood::create([
                'order_id' => $request->id,
                'food_id' => $request->id,
                'jumlah' => $request->jumlah,
            ]);

            return redirect()->back()->with('success', 'Data Level berhasil ditambahkan');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jumlah' => 'nullable',
        ]);

        OrderFood::create($validatedData);
    }

    /**
     * Display the specified resource.
     */
    public function show(OrderFood $orderFood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderFood $orderFood)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderFood $orderFood)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderFood $orderFood)
    {
        //
    }
}
