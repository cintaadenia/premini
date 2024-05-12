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

        $trans = Transaction::where('transaction_id', $request->order_id)->first();
        $order = Order::where('transaction_id', $request->order_id)->first();


        if ($trans && $order && $request->transaction_status === 'settlement') {
            $trans->statusBayar = 'PAID';
            $trans->save();

            $order->status = 'PAID';
            $order->save();

            return redirect()->route('transaction.index')->with('message', 'Data transaksi dan pesanan berhasil diperbarui');
        } else {
            return redirect()->route('transaction.index')->with('error', 'Transaksi atau pesanan tidak ditemukan atau status bukan "settlement"');
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



