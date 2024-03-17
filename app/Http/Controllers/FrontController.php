<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    // get data into front page
    public function trending(){
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
        return view('properties',
        compact(
            'getproperties' ,
            'getguesthouse',
            'slideproperties',
        ),
        [
            'category' => $category,
        ]);
    }


}
