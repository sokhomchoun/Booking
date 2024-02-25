<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class HotelController extends Controller
{
    public function createhotel(Request $request){
        if($request->has('image_hotel')){
            $file = $request->file('image_hotel');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $path = 'uploads/photos/';
            $file->move($path,$filename);
        }
        
        $hotel = Hotel::create([
            'hotel_name' => $request->hotel_name,
            'image_hotel' => $filename,
            'province' => $request->province,
            'category_name' => $request->category_name,
            'description' => $request->description,
        ]);
        $hotel->save();

        return redirect()->back()->with('status','Hotel added successfully');
    }
}
