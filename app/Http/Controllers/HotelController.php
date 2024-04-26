<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class HotelController extends Controller
{

    public function showhotel(){
        return view('dashboard.hotel.addhotel');
    }

    public function getalldate(){
        $province = DB::table('province')->get();
        $category = DB::table('category')->get();
        $room = DB::table('room')->get();
        $hotel = DB::table('hotel')->orderBy('id','DESC')->get();
        return view('dashboard.hotel.addhotel',[
            'province' => $province,
            'category' => $category,
            'room' => $room,
            'hotel' => $hotel,
        ]);
    }

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
            'category' => $request->category,
            'description' => $request->description,
            'price' => $request->price,
            'roomtype' => $request->roomtype,
        ]);
        $hotel->save();

        return redirect()->back()->with('status','Hotel added successfully');
    }

    public function deletehotel($id){
        $deletehotel = Hotel::find($id);
        $destination = 'uploads/photos/'.$deletehotel->image_hotel;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $deletehotel->delete();
        return redirect()->back()->with('status','Deleted successfully');
    }

    public function edithotel($id){
        $item = Hotel::findOrFail($id);
        return view('dashboard.hotel.edithotel',compact('item'));
    }

    public function updatehotel(Request $request, $id){
        $updatehotel = Hotel::findOrFail($id);
        $updatehotel->hotel_name = $request->input('hotel_name');
        $updatehotel->province = $request->input('province');
        $updatehotel->category = $request->input('category');
        $updatehotel->description = $request->input('description');
        $updatehotel->description = $request->input('description');
        $updatehotel->price = $request->input('price');
        $updatehotel->roomtype = $request->input('roomtype');

        if($request->hasfile('image_hotel'))
        {
            $destination = 'uploads/photos/'.$updatehotel->image_hotel;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('image_hotel');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/photos/',$filename);
            $updatehotel->image_hotel = $filename;

        }
        $updatehotel->update();

        return redirect(route('dashboard.hotel.addhotel'))->with('status','Item update successfully');

    }

    public function searchproperties(Request $request){
        $query = $request->input('query');
        $result = Hotel::where('hotel_name','like','%'.$query.'%')->orWhere('category','like','%'.$query.'%')->get();
        return response()->json($result);
    }

 



}
