<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaction;



class GrafikController extends Controller
{
    // public function index()
    // {
    //     $transactions = Transaction::where('statusBayar', 'PAID');

    //     $transactionAmount = $transactions
    //         ->groupBy(DB::raw('DAY(created_at)')) // Mengelompokkan berdasarkan hari dalam sebulan
    //         ->pluck(DB::raw('SUM(total) as total_amount'));
    //     $transactionDay = $transactions
    //         ->groupBy(DB::raw('DAY(created_at)')) // Mengelompokkan berdasarkan hari dalam sebulan
    //         ->pluck(DB::raw('DAY(created_at)'));

    //     // Mendefinisikan semua hari dalam sebulan
    //     $daysOfMonth = range(1, 31);

    //     // Menggabungkan semua hari dalam sebulan dan data transaksi sesuai harinya
    //     $dailyData = collect($daysOfMonth)->map(function ($day) use ($transactionAmount, $transactionDay) {
    //         $index = $transactionDay->search($day);
    //         return $index !== false ? $transactionAmount[$index] : 0;
    //     })->values()->all();

    //     return view('pengguna.grafik', compact('dailyData', 'daysOfMonth'));
    // }

    // public function grafik()
    // {
    //     $total = Transaction::select(
    //         DB::raw('sum(price) as sums'),
    //         DB::raw("DATE_FORMAT(created_at,'%d %M %Y') as days")
    //     )
    //         ->groupBy('days')
    //         ->get();
    // }

    public function grafik()
{
    // Mengambil total transaksi per hari
    $totalsPerDay = Transaction::select(
        DB::raw('DATE(created_at) as day'),
        DB::raw('SUM(total) as total_amount')
    )
    ->where('statusBayar', 'PAID')
    ->groupBy('day')
    ->get();

    // Mengonversi data ke format yang dapat digunakan oleh ApexCharts
    $data = $totalsPerDay->map(function ($total) {
        return [
            'x' => $total->day->format('Y-m-d'), // Tanggal dijadikan sumbu x
            'y' => $total->total_amount, // Total transaksi dijadikan sumbu y
        ];
    });

    return response()->json($data);
}


}
