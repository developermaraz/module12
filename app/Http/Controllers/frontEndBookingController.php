<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Route;
use App\Models\Trip;
use App\Models\User;
use App\Models\Book;
use App\Models\Bus;


class frontEndBookingController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function searchResult()
    {
        return view('searchResult');
    }
    public function searchResultPost(Request $request)
    {
        $request->validate([
            'from' => 'required',
            'to' => 'required',
            'journeyDate' => 'required',
            'totalMember' => 'required',
        ]);
        if ($request->totalMember == 'Total Member') {
            return redirect()->back()->with('error', 'The Total Member field is required.!');
        }
        if ($request->from == $request->to) {
            return redirect()->back()->with('error', 'Two Way Is Same');
        }
        $routeName = "$request->from-to-$request->to";
        $data = Route::where('name', '=', $routeName)->get();
        if (!empty($data)) {
            $routeId = $data[0]['id'];
            $startDate = $request->journeyDate;
            $result = Trip::where('route_id', $routeId)->where('startingDate', '=', $startDate)->with('route', 'route.bus')->get();
            if ($request->journeyDate == $result[0]['startingDate']) {
                $wantSeat = $request->totalMember;
                return view('searchResult', compact('result', 'wantSeat'));
            } else {
                return redirect()->back()->with('error', 'Trip Not Found!');
            }
        } else {
            return redirect()->route('searchResult')->with('error', 'Route Not Found!');
        }
    }
    public function FrontBookTrip(Request $request, $id, $seat){
        $data = [
            "id" => $id,
            "seat" => $seat,
        ];
        return view('booktrip', compact('data'));
    }
    public function FrontBookTripPost(Request $request){
        $request->validate([
            'phone' => 'required',
            'id' => 'required',
            'seat' => 'required',
            'name' => 'required',
        ]);
        $id = base64_decode($request->id);
        $seat = base64_decode($request->seat);
        $trips = Trip::where('id', $id)->first();
        $route_id = $trips->route_id;
        $routes = Route::where('id', '=', $route_id)->first();
        $bus = Bus::where('id', '=', $routes->bus_id)->first();
        $totalSeat = (int)$trips->seatReserve;
        $totalSeat = $totalSeat+(int)$seat;
        if($bus->totalSeat < $totalSeat){
            return redirect()->back()->with('error', 'Already Booked All Seat');
        }
        $user = User::where('mobile', '=', $request->phone)->first();
        $user->id ?? 'none';
        // check user;
        if(empty(User::where('mobile', '=', $request->phone)->first())){
            user::create([
                'role' => 1,
                'name' => $request->name,
                'mobile' => $request->phone,
                'password' => $request->phone,
                'status' => 0,
            ]);
        }
        
        Trip::where('id', '=', $id)->update([
            'seatReserve' => $totalSeat
        ]);
        Book::create([
            'user_id' => $user->id ?? 'none',
            'trip_id' => $id,
            'totalMember' => $seat,
            'perCost' => $routes->price,
            'TotalCost' => $routes->price*$seat
        ]);
        // return base64_decode($request->seat);
        return redirect()->route('success.booked')->with('success', 'Successfully Booked');
    }
}
