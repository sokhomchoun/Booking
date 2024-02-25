<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class ProvinceController extends Controller
{
    public function createprovince(Request $request){
        if($request->has('image_province')){
            $file = $request->file('image_province');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $path = 'uploads/photos/';
            $file->move($path,$filename);
        }

        $province = Province::create([
            'province' => $request->province,
            'image_province' => $filename,
            'village' => $request->village,
            'district' => $request->district,
        ]);
        $province->save();

        return redirect()->back()->with('status','Province added successfully');
    }
}
