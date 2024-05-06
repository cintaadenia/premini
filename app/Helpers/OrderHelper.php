<?php

namespace App\Helpers;

use App\Models\Dimsum;
use App\Models\Drink;
use App\Models\Food;
use App\Models\Order;

class OrderHelper
{
    public static function index(string $order)
    {
        $order = Order::where('id', $order)->first();

        $food = Food::find($order->food_id);
        $priceFood = $food->price;

        $drink = Drink::find($order->drinks_id);
        $priceDrink = $drink->price;

        $dimsum = Dimsum::find($order->dimsums_id);
        $priceDimsum = $dimsum->price;

        $total = $priceFood + $priceDimsum + $priceDrink;
        return $total;
    }

    public static function showOrderDetails(string $orderId)
    {
        $orders = Order::findOrFail($orderId);

        $foods = $orders->foods;
        $drinks = $orders->drinks;
        $dimsums = $orders->dimsums;

        return view('pengguna.order', compact('orders', 'foods', 'drinks', 'dimsums'));
    }
}
