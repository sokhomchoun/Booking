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
        $roomtype = RoomType::create([
            'type_no' => $request->type_no,
            'bed_number' => $request->bed_number,
            'price_per_night' => $request->price_per_night,
            'description' => $request->description,
            'capacity' => $request->capacity,

        ]);
        $roomtype->save();

        return redirect()->back()->with('status','Province added successfully');
    }

    public function getroomtype(){
        $roomtype = DB::table('roomtype')->get();
        return view('dashboard.roomtype.roomtype',[
            'roomtype' => $roomtype
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
        $updatetype->type_no = $request->input('type_no');
        $updatetype->bed_number = $request->input('bed_number');
        $updatetype->price_per_night = $request->input('price_per_night');
        $updatetype->description = $request->input('description');
        $updatetype->capacity = $request->input('capacity');
        $updatetype->update();
        return redirect(route('dashboard.roomtype.roomtype'))->with('status','Item update successfully');
    }

}
