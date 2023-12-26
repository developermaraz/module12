<?php

namespace App\Http\Controllers;
use App\Models\Route;
use App\Models\Bus;
use App\Models\Trip;
use Illuminate\Http\Request;

class tripsController extends Controller
{
    public function index(){
        $data = Trip::with('route')->latest()->get();
        foreach($data as $row){
            if(date('Y-m-d') > $row->startingDate){
                Trip::where('id', $row->id)->update([
                    'status' => 1,
                ]);
            }
        }
        $data = Trip::with('route')->latest()->get();
        return view('adminTrips', compact('data'));
    }
    public function createView(){
        $route = Route::latest()->get();
       return view('createTrip', compact('route'));
    }

    public function Store(Request $request){
        $request->validate([
            'route' => 'required',
            'startingDate' => 'required',
            'startingTime' => 'required',
        ]);
        // save 
        Trip::Create([
            'user_id' => 1,
            'route_id' => $request->route,
            'startingDate' => $request->startingDate,
            'startingTime' => $request->startingTime,
            'seatReserve' => 0,
            'status' => 0
        ]);
        return redirect()->back()->with('success', 'Successfully Create Trip');
    }
    public function update(Request $request, $id){
        $id = base64_decode($id);
        $Trip = Trip::with('route')->find($id);
        return view('editTrip', compact('Trip'));
    }
    public function updatePost(Request $request, $id){
        $request->validate([
            'status' => 'required',
        ]);
        $id = base64_decode($id);
        $Route = Trip::find($id);
        if(!empty($request->startingDate)){
            $Route->startingDate = $request->startingDate;
        }
        if(!empty($request->startingTime)){
            $Route->startingTime = $request->startingTime;
        }
        $Route->status = $request->status;
        $Route->update();
        return redirect()->back()->with('success', 'Successfully Update This Trip');
    }
}
