<?php

namespace App\Http\Controllers;

use App\Models\Dimsum;
use App\Models\Drink;
use App\Models\Food;
use App\Models\User;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function index()
    {
        $countFood = Food::count();
        $countDimsum = Dimsum::count();
        $countDrink = Drink::count();
        $countUser = User::count();

        $transactions = Transaction::where('statusBayar', 'PAID');

        $transactionAmount = $transactions
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->pluck(DB::raw('SUM(total) as total_amount'));
        $transactionMonth = $transactions
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->pluck(DB::raw('MONTH(created_at)'));

        $allMonths = range(1, 12);
        $monthlyData = collect($allMonths)->map(function ($month) use ($transactionAmount, $transactionMonth) {
            $index = $transactionMonth->search($month);
            return $index !== false ? $transactionAmount[$index] : 0;
        })->values()->all();

        $monthData = collect($allMonths)->map(function($month, $index) use ($transactionMonth) {
            $check = $transactionMonth->search($month);

            if($check === false) {
                $transactionMonth->push(++$index);
            }
        });

        $transactionMonth = $transactionMonth->sort()->map(function($item) {
            $month = [
                'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                'Jul', 'Ags', 'Sep', 'Okt', 'Nov', 'Des'
            ];
            return $month[$item - 1];

        })->values()->all();
        // dd($monthlyData);

        return view('dashboard.dashboard', compact('countFood', 'countDrink', 'countDimsum', 'countUser', 'monthlyData', 'transactionMonth'));
    }

    public function grafik()
    {
        $total = Transaction::select(
            DB::raw('sum(price) as sums'),
            DB::raw("DATE_FORMAT(created_at,'%M %Y') as months")
        )
            ->groupBy('months')
            ->get();
    }
}
