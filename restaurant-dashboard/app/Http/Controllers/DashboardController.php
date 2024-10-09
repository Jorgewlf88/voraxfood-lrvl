<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Reservation;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $pendingOrders = Order::where('status', 'pending')->count();
        $upcomingReservations = Reservation::where('status', 'confirmed')
            ->where('reservation_time', '>', now())
            ->count();

        return view('dashboard', compact('pendingOrders', 'upcomingReservations'));
    }
}