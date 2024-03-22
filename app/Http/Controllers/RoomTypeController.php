<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoomTypeController extends Controller
{
    public function showroomtype(){
        return view('dashboard.roomtype.roomtype');
    }

    public function createroomtype(Request $request){

        if($request->has('type_image')){
            $file = $request->file('type_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $path = 'uploads/photos/';
            $file->move($path,$filename);
        }
        $roomtype = RoomType::create([
            'room_no' => $request->room_no,
            'hotel_no' => $request->hotel_no,
            'bed' => $request->bed,
            'price' => $request->price,
            'description' => $request->description,
            'capacity' => $request->capacity,
            'type_image' => $filename

        ]);
        $roomtype->save();

        return redirect()->back()->with('status','Province added successfully');
    }

    public function getroomtype(){
        $roomtype = DB::table('roomtype')->get();
        $hotel = DB::table('hotel')->get();
        $room = DB::table('room')->get();
        return view('dashboard.roomtype.roomtype',[
            'roomtype' => $roomtype,
            'hotel' => $hotel,
            'room' => $room,
        ]);
    }

    public function deletetype($id){
        $type = RoomType::find($id);
        if($type != null){
            $type->delete();
        }
        
        return redirect()->back()->with('status','Deleted successfully');
    }

    public function edittype($id){
        $item = RoomType::findOrFail($id);
        return view('dashboard.roomtype.editroomtype',compact('item'));
    }

    public function updatetype(Request $request,$id){
        $updatetype = RoomType::findOrFail($id);
        $updatetype->room_no = $request->input('room_no');
        $updatetype->hotel_no = $request->input('hotel_no');
        $updatetype->bed = $request->input('bed');
        $updatetype->price = $request->input('price');
        $updatetype->description = $request->input('description');
        $updatetype->capacity = $request->input('capacity');
        $updatetype->update();
        return redirect(route('dashboard.roomtype.roomtype'))->with('status','Item update successfully');
    }

}
