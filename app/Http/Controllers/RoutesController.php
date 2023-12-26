<?php

namespace App\Http\Controllers;
use App\Models\Route;
use App\Models\Bus;
use Illuminate\Http\Request;

class RoutesController extends Controller
{
    public function index(){
        $data = Route::with('bus')->latest()->get();
        return view('routes', compact('data'));
    }
    public function createView(){
        $bus = Bus::get();
       return view('createRoutes', compact('bus'));
    }
    public function Store(Request $request){
        $request->validate([
            'busName' => 'required',
            'form' => 'required',
            'to' => 'required',
            'cost' => 'required',
        ]);
        if($request->form == $request->to){
            return redirect()->back()->with('error', 'From And To Are Same Way');
        }
        $name = "$request->form-to-$request->to";
        if(Route::where('name', '=', $name)->first() != null){
            return redirect()->back()->with('error', 'Already Added This Route');
        }
    
        // save or update
        Route::Create([
            'user_id' => 1,
            'bus_id' => $request->busName,
            'from' => $request->form,
            'to' => $request->to,
            'name' => $name,
            'price' => $request->cost,
            'status' => 0
        ]);
        $bus = Bus::get();
        return redirect()->back()->with('success', 'Successfully Create Route');
    }
    public function update(Request $request, $id){
        $id = base64_decode($id);
        $Route = Route::with('bus')->find($id);
        $bus = Bus::get();
        return view('editRoute', compact('bus', 'Route'));
    }
    public function updatePost(Request $request, $id){
        $request->validate([
            'busName' => 'required',
            'cost' => 'required',
            'status' => 'required',
        ]);
        $id = base64_decode($id);
        $Route = Route::find($id);
        $Route->bus_id = $request->busName;
        $Route->price = $request->cost;
        $Route->status = $request->status;
        $Route->update();
        return redirect()->back()->with('success', 'Successfully Update This Route');
    }
}
