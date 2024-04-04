<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    public function booking(){
        return view('dashboard.booking.booking');
    }
    // create bookings
    public function createbooing(Request $request){
        $booking = Booking::create([
            'room_no' => $request->room_no, 
            'roomtype' => $request->roomtype, 
            'guest' => $request->guest, 
            'email' => $request->email, 
            'phone_number' => $request->phone_number, 
            'check_in_date' => $request->check_in_date, 
            'check_out_date' => $request->check_out_date, 
            'payment' => $request->payment, 
            'status' => "Available", 
            'bed' => $request->bed, 
        ]);
        $booking->save();
        return redirect()->back()->with('status','You booking successfully');
    }
    
}
