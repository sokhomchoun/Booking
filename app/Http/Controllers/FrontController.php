<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Province;
use App\Models\ViewRoom;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    // get data into front page
    public function displayfront(){
        $cambodia = DB::table('cambodia')->orderBy('id','DESC')->paginate(6);
        $category = DB::table('category')->get();
        $province = DB::table('province')->get();
        $hotel = DB::table('hotel')->orderBy('id','DESC')->get();
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
        $getproperties = Hotel::where('province',$province)->where('category','hotel')->orderBy('id','DESC')->get();
        $getguesthouse = Hotel::where('province',$province)->where('category','guesthouse')->orderBy('id','DESC')->get();
        $getholidayhome= Hotel::where('province',$province)->where('category','holidayhome')->orderBy('id','DESC')->get();
        $getresort= Hotel::where('province',$province)->where('category','resort')->orderBy('id','DESC')->get();
        $slideproperties = Hotel::where('province',$province)->get();
        $getprovince = Hotel::where('province',$province)->paginate(1);
        return view('properties',
        compact(
            'getproperties' ,
            'getguesthouse',
            'getholidayhome',
            'getresort',
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


    //  fillter pageg
    public function fillterpage(){
        $category = DB::table('category')->get();
        return view('fillter',[
            'category' => $category,
        ]);
    }
   
    public function filltercategory($category_name){
        $category = DB::table('category')->get();
        $categoryname = Hotel::where('category',$category_name)->get();
        $getcategory = Hotel::where('category',$category_name)->paginate(1);
        return view('fillter',
        compact(
            'categoryname',
            'getcategory'
            ),
    [
            'category' => $category,
        ]);
    }

    public function search(Request $request){
        $category = DB::table('category')->get();
        $query = $request->input('query');
        $results = Hotel::where('hotel_name', 'like', '%' . $query . '%')->orWhere('province', 'like', '%' . $query . '%')->get();
        return view('search',  ['results' => $results],compact('category'));
    }


    public function searchdate(Request $request){
        $checkInDate = strtotime($request->checkin_date);
        $checkOutDate = strtotime($request->checkout_date);

        $numberOfNights = ($checkOutDate - $checkInDate) / (60 * 60 * 24); // Calculate number of nights
        $selectedRoomPrice = $request->room_price;
        $totalPrice = $numberOfNights * $selectedRoomPrice; // Total price based on room price and duration of stay

        return response()->json(['total_price' => $totalPrice]);
    }

}
