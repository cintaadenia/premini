<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use App\Models\User;
use App\Http\Requests\StoreTransactionRequest;
use App\Http\Requests\UpdateTransactionRequest;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $transaction = Transaction::get();
        $detailtransaction =Transaction::where([
            ['id','=', $request->input('id')],

        ])->first();

        return view('pengguna.transaction', compact('transaction','detailtransaction'));
    }

    public function transaction()
    {
        $transaction = Transaction::where('users_id', auth()->id())->get();
        return view('pengguna.transaction', compact('transaction'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        User::create([
            'user_id' => auth()->user()->id,
            // 'order_id' => $->id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTransactionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTransactionRequest $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
