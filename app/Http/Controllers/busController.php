<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Bus;
use App\Models\Route;
// use App\Http\Controllers\Exception;
class busController extends Controller
{
    public function index(){
        $data = Bus::latest()->get();
        return view('adminBus', compact('data'));
    }
    public function createView(){
        return view('createBus');
    }
    public function editView(Request $request, $id){
        $data = Bus::where('id', '=', base64_decode($id))->first();
        return view('editBus', compact('data'));
    }
    public function stor(Request $request){
        $request->validate([
            'totalSeat' => 'required|integer',
            'busName' => 'required|string',
        ]);
        if(empty(Bus::where('name', '=', $request->busName))){
            return redirect()->back()->with('error', 'This Bus Is already added');
        }
        Bus::create([
            'user_id' => 1,
            'name' => $request->busName,
            'totalSeat' => $request->totalSeat,
            'status' => 0,
        ]);
        return redirect()->back()->with('success', 'Successfully Created New Bus');
    }
    public function update(Request $request, $id){
        $request->validate([
            'status' => 'required',
            'totalSeat' => 'required|integer',
            'id' => 'required',
        ]);
        $id = base64_decode($request->id);
        Bus::where('id', '=', $id)->update([
            'totalSeat' => $request->totalSeat,
            'status' => $request->status
        ]);
        return redirect()->back()->with('success', 'Successfully Updated');
    }

    public function delete(Request $request){
        $id = $request->busId;
        if(Route::where('bus_id','=', $id)->first()){
            return "unableToDelete";
        }else{
            Bus::where('id', $id)->delete();
            return 'success';
        }

    }
}
