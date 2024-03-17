<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;


class ProvinceController extends Controller
{
    public function showprovince(){
        return view('dashboard.province.addprovince');
    }

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

    public function getprovince(){
        $province = DB::table('province')->get();
        $cambodia = DB::table('cambodia')->get();
        return view('dashboard.province.addprovince',[
            'province' => $province,
            'cambodia' => $cambodia,
        ]);
    }

    public function deleteProvince($id){
        $deletepro = Province::find($id);
        $destination = 'uploads/photos/'.$deletepro->image_province;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $deletepro->delete();
        return redirect()->back()->with('status','Deleted successfully');
    }

    public function editpro($id){
        $item = Province::findOrFail($id);
        return view('dashboard.province.editprovince',compact('item'));
    }

    public function updatepro(Request $request, $id){
        $updatepro = Province::findOrFail($id);
        $updatepro->province = $request->input('province');
        $updatepro->village = $request->input('village');
        $updatepro->district = $request->input('district');

        if($request->hasfile('image_province'))
        {
            $destination = 'uploads/photos/'.$updatepro->image_province;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('image_province');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/photos/',$filename);
            $updatepro->image_province = $filename;

        }
        $updatepro->update();

        return redirect(route('dashboard.province.addprovince'))->with('status','Item update successfully');
    }

    public function searchpro(Request $request){
        $query = $request->input('query');
        $result = Province::where('province','like','%'.$query.'%')->get();
        return response()->json($result);
    }

}
