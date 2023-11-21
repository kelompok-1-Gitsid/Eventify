<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function showDashboard()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('dashboard.dashboard', compact('orders'));
    }
}
