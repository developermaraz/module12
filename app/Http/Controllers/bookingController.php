<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Book;

class bookingController extends Controller
{
    public function index(Request $request){
        $data = Book::with(['user', 'trip', 'trip.route', 'trip.route.bus'])->latest()->get();
        return view('adminBooking', compact('data'));
    }
    public function delete(Request $request){
        if(Book::where('id', $request->busId)->delete()){
            return 'success';
        }else{
            return 'problem';
        }
    }
}
