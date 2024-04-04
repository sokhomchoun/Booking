<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Province;
use App\Models\ViewRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    // get data into front page
    public function displayfront(){
        $cambodia = DB::table('cambodia')->orderBy('id','DESC')->paginate(6);
        $category = DB::table('category')->get();
        $province = DB::table('province')->get();
        $hotel = DB::table('hotel')->get();
        return view('welcome',[
            'cambodia' => $cambodia,
            'category' => $category,
            'province' => $province,
            'hotel' => $hotel,
        ]);
    }

    public function getproperties(){
        $category = DB::table('category')->get();
        return view('properties',[
            'category' => $category,
        ]);
    }

    public function getdetails(){
        $category = DB::table('category')->get();
        return view('details',[
            'category' => $category,
        ]);
    }

    public function selectedProvince($province){
        $category = DB::table('category')->get();
        $getproperties = Hotel::where('province',$province)->where('category','hotel')->get();
        $getguesthouse = Hotel::where('province',$province)->where('category','guesthouse')->get();
        $slideproperties = Hotel::where('province',$province)->get();
        $getprovince = Hotel::where('province',$province)->paginate(1);
        return view('properties',
        compact(
            'getproperties' ,
            'getguesthouse',
            'slideproperties',
            'getprovince',
        ),
        [
            'category' => $category,
        ]);
    }

    public function selectedDetail($id) {
        $category = DB::table('category')->get();
        $viewroom = ViewRoom::where('hotel_no',$id)->get();
        return view('details',
            compact(
                'viewroom',
            ),[
            'category' => $category,
        ]);
    }

    public function gethotel($hotel_no){
        $viewroom = ViewRoom::where('hotel_no',$hotel_no)->get();
        return view('details',
        compact(
            'viewroom' ,
        ));
    }
   

}
