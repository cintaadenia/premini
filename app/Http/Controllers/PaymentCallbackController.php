<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Services\CallbackService;

class PaymentCallbackController extends Controller
{
    public function receive(Request $request)
    {

            $trans = Transaction::where('transactions_id', $request->order_id)->first();

            // dd($request->transaction_status === 'settlement');


            if ($request->transaction_status === 'settlement') {
                    // Logika pengurangan stok
                    $order = Order::find($trans->order_id);
                    $order->stock -= $trans->quantity;
                    dd($order);
                    $order->save();

                    // Ubah status pembayaran
                    $trans->statusBayar = 'PAID';
                    $trans->save();

                return redirect()->route('transaction.index')->with('message', 'Data transaksi berhasil diperbarui');
            } else {
                return redirect()->route('transaction.index')->with('error', 'Transaksi tidak ditemukan');
            }


    }
}

// $trans = Transaction::where('transactions_id', $request->order_id)->first();

// if ($trans) {
//     $trans->status = $request->status;
//     $trans->save();

//     return redirect()->route('transaction.index')->with('message', 'Data transaksi berhasil diperbarui');
// } else {

//     return redirect()->route('transaction.index')->with('error', 'Transaksi tidak ditemukan');
// }

