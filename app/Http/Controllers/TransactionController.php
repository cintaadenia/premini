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
        $transaction = Transaction::where('user_id', auth()->id())->get();
        $detailtransaction =Transaction::where([
            ['id','=', $request->input('id')],
            // ['statusBayar','!=','PAID'],
        ])->first();

        return view('pengguna.transaction', compact('transaction','detailtransaction'));
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
  /**
 * Update the specified resource in storage.
 */
public function update(UpdateTransactionRequest $request, Transaction $transaction)
{
    // Proses validasi dan pembaruan transaksi

    // Jika transaksi berhasil diperbarui dan pembayaran telah diterima
    if ($transaction->statusBayar === 'PAID') {
        // Kurangi stok barang
        $product = Transaction::find($transaction->order_id);
        $product->reduceStock($transaction->quantity);
    }

    // Lanjutkan proses pembaruan transaksi
    $transaction->update($request->all());

    // Redirect atau berikan respon sesuai kebutuhan aplikasi
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
