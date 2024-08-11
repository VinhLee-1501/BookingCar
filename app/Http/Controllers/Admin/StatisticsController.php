<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\TicketBookingCar;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class StatisticsController extends Controller
{
    public function index()
    {
        Carbon::setLocale('vi');
        // Khởi tạo Carbon để lấy thời gian hiện tại
        $now = Carbon::now();

        // Tạo mảng lưu doanh thu mỗi tháng
        $salesData = [];

        // Lặp qua 12 tháng
        for ($i = 0; $i < 12; $i++) {
            // Lấy tháng hiện tại trong vòng lặp
            $month = $now->copy()->subMonths($i);

            // Tính tổng doanh thu cho tháng đó
            $totalSales = TicketBookingCar::whereMonth('day_founded', $month->month)
                ->whereYear('day_founded', $month->year)
                ->sum('prepayment');

            // Lưu doanh thu vào mảng
            $salesData[] = [
                'month' => $month->format('m-Y'),
                'total_sales' => $totalSales
            ];
        } 
        $salesData = array_reverse($salesData);
        return view('admin.index', ['salesData' => $salesData]);
    }
}
