<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class RoomController extends Controller
{
    
    public function showroom(){
        return view('dashboard.room.addroom');
    }

    public function createroom(Request $request){
        if($request->has('image_room')){
            $file = $request->file('image_room');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $path = 'uploads/photos/';
            $file->move($path,$filename);
        }

        $room = Room::create([
            'room_no' => $request->room_no,
            'hotel_no' => $request->hotel_no,
            'province' => $request->province,
            'image_room' => $filename,
           
        ]);
        $room->save();

        return redirect()->back()->with('status','Province added successfully');
    }

    public function getroom(){
        $room = DB::table('room')->get();
        $province = DB::table('province')->get();
        $hotel = DB::table('hotel')->get();
        return view('dashboard.room.addroom',[
            'room' => $room,
            'province' => $province,
            'hotel' => $hotel,
        ]);
    }

    public function deleteroom($id){
        $deleteroom = Room::find($id);
        $destination = 'uploads/photos/'.$deleteroom->image_province;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $deleteroom->delete();
        return redirect()->back()->with('status','Deleted successfully');
    }

    public function editroom($id){
        $item = Room::findOrFail($id);
        return view('dashboard.room.editroom',compact('item'));
    }

    public function updateroom(Request $request,$id){
        $updateroom = Room::findOrFail($id);
        $updateroom->room_no = $request->input('room_no');
        $updateroom->hotel_no = $request->input('hotel_no');
        $updateroom->province = $request->input('province');

        if($request->hasfile('image_province'))
        {
            $destination = 'uploads/photos/'.$updateroom->image_room;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('image_room');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/photos/',$filename);
            $updateroom->image_room = $filename;

        }
        $updateroom->update();

        return redirect(route('dashboard.room.addroom'))->with('status','Item update successfully');
    }


}
