<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Checkout;
use App\Models\Dimsum;
use App\Models\Drink;
use App\Models\Food;
use App\Models\Order;
use App\Models\User;
use App\Services\MidtransSnap;
use Illuminate\Http\Request;
use App\Models\Transaction;
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
        $order = Order::where('users_id', auth()->id())->get();
        return view('pengguna.order', compact('order'));

    }


    public function create(OrderRequest $request)
    {
        $order = Transaction::where('transactions_id', $request->order_id)->first();
        // dd($request->all());
        $order = Order::create([
            'noTelepon' => $request->noTelepon,
            'food_id' => $request->makanan,
            'levels_id' => $request->level,
            'drinks_id' => $request->minuman,
            'dimsums_id' => $request->dimsum,
            'users_id' => auth()->id(),
            'catatan' => $request->catatan,
        ]);
        //untuk mengurangi stock
        //Untuk Food
        $food = Food::findOrFail($request->makanan);

        $food->update([
            'stock' => $food->stock - 1
        ]);

        //Untuk Drink
        $drink = Drink::findOrFail($request->minuman);

        $drink->update([
            'stock' => $drink->stock - 1
        ]);

        //Untuk Dimsum
        $dimsum = Dimsum::findOrFail($request->dimsum);

        $dimsum->update([
            'stock' => $dimsum->stock - 1
        ]);

        Checkout::create([
            'user_id' => auth()->id(),
            'order_id' => $order->id,
        ]);

        // return redirect()->back()->with('success', 'Anda Berhasil Order');

        return redirect('order')->with('success', 'Anda Berhasil Order');
    }

    public function pay(Request $request)
    {
        $request->validate([
            'id' => 'exists:orders,id|required'
        ]);

        $transaction = Transaction::where([
            ['order_id','=', $request->input('id')],
            ['statusBayar','=','PAID']
        ])->first();

        if($transaction)
        {
            return redirect()->route('transaction.index', ['id' => $transaction->id]);
        }

        $orderId = "ORDER-" . rand();
        $orders = Order::find($request->id)->first();

        $item = collect([]);

        if ($orders->food) {
            $item->push([
                'id' => rand(),
                'price' => $orders->food->price,
                'quantity' => 1,
                'name' => $orders->food->food,
            ]);
        }

        if ($orders->drinks) {
            $item->push([
                'id' => rand(),
                'price' => $orders->drinks->price,
                'quantity' => 1,
                'name' => $orders->drinks->drink,
            ]);
        }

        if ($orders->dimsums) {
            $item->push([
                'id' => rand(),
                'price' => $orders->dimsums->price,
                'quantity' => 1,
                'name' => $orders->dimsums->dimsum,
            ]);
        }

        $userDetail = [
            'first_name' => $orders->user->name,
            'email' => $orders->user->email,
            'phone' => $orders->noTelepon,
        ];

        $midtrans = new MidtransSnap($orderId, $item, $userDetail);
        $midtransData = $midtrans->create();

        Transaction::create([
            'transactions_id' => $orderId   ,
            'user_id' => auth()->id(),
            'order_id' => $request->id,
            'snapToken' => $midtransData['token'],
            'total' => $midtransData['total'],
            'statusBayar' => "PAID",
        ]);

        // if ($transaction) {
        //     $order = Order::find($request->id);
        //     if ($order) {
        //         $product = $order->food ?? $order->drinks ?? $order->dimsums;
        //         if ($product) {
        //             $product->stock -= 1;
        //             dd($product);
        //             $product->save();
        //         }
        //     }
        // }
        // return response()->json(['snap-token' => $midtransData['token']]);
        return redirect('/transaction');
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
    { {
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
