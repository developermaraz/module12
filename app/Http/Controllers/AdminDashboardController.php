<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bus;
use App\Models\Route;
use App\Models\Trip;
use App\Models\Book;
use Illuminate\Support\Carbon;


class AdminDashboardController extends Controller
{
    public function index()
    {
        // $date = '2023-12-25';
        $today = Carbon::today();
        $todayDate = $today->format('Y-m-d');
        $todayCost = Book::whereDate('created_at', $todayDate)->sum('TotalCost');
        $yesterday = Carbon::yesterday();
        $todayDate = $yesterday->format('Y-m-d');
        $yesterdayCost = Book::whereDate('created_at', $todayDate)->sum('TotalCost');
        // this month
        $firstDayOfMonth = Carbon::now()->firstOfMonth();
        $lastDayOfMonth = Carbon::now()->lastOfMonth();
        $thisMonthCost = Book::whereBetween('created_at', [$firstDayOfMonth, $lastDayOfMonth])->sum('TotalCost');
        // lastMonth
        $firstDayOfLastMonth = Carbon::now()->subMonth()->firstOfMonth();
        $lastDayOfLastMonth = Carbon::now()->subMonth()->lastOfMonth();
        $lastMonthCost = Book::whereBetween('created_at', [$firstDayOfLastMonth, $lastDayOfLastMonth])->sum('TotalCost');
        // total bus
        $totalBus = Bus::count();
        // total route
        $totalRoute = Route::count();
        // total trip
        $totalTrip = Trip::count();
        // active trip
        $activeTrip = Trip::where('status', '=', 0)->count();
        // done trip
        $doneTrip = Trip::where('status', '=', 1)->count();
        // user
        $user = User::where('role', '=', 1)->count();
        // admin
        $admin = User::where('role', '=', 0)->count();
        $data = [
            'todayCost' => $todayCost,
            'yesterdayCost' => $yesterdayCost,
            'thisMonthCost' => $thisMonthCost,
            'lastMonthCost' => $lastMonthCost,
            'totalBus' => $totalBus,
            'totalRoute' => $totalRoute,
            'totalTrip' => $totalTrip,
            'activeTrip' => $activeTrip,
            'doneTrip' => $doneTrip,
            'user' => $user,
            'admin' => $admin,
        ];
        return view('dashboard', compact('data'));
    }
}
