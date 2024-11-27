<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainAdminController extends Controller
{
    public function index(Request $request)
    {
        $dateRange = $request->input('dateRange');

        if ($dateRange) {
            list($startDate, $endDate) = explode(' - ', $dateRange);
        } else {
            $startDate = Carbon::now()->startOfMonth()->toDateString();
            $endDate = Carbon::now()->endOfMonth()->toDateString();
        }

        $customers = Customer::whereBetween('created_at', [$startDate, $endDate])
            ->where('status', 'completed')
            ->get();
        
        $revenue = 0;
        foreach ($customers as $customer) {
            $revenue += $customer->calculateTotalPrice();
        }

        return view('admin.home', [
            'title' => 'Trang quản trị Admin',
            'revenue' => $revenue,
        ]);
    }
}
