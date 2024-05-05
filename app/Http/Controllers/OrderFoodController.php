<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\OrderFood;
use Illuminate\Http\Request;

class OrderFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::all();
        return view('pengguna.user2', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        // $orderFood = OrderFood::create([
        //     'orderFood_id' => $request->jumlah,

        // ]);

        // $orderDimsum = OrderDimsum::create([
        //     'orderDimsum_id' => $request->jumlah,

        // ]);

        // $orderDrink = OrderDrink::create([
        //     'orderDrink_id' => $request->jumlah,

        // ]);
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
