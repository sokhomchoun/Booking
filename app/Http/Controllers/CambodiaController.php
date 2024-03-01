<?php

namespace App\Http\Controllers;

use App\Models\Cambodia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class CambodiaController extends Controller
{
    public function showcambodia(){
        return view('dashboard.cambodia.addcambodia');
    }
    
    public function createcambodia(Request $request){
        if($request->has('province_image')){
            $file = $request->file('province_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $path = 'uploads/photos/';
            $file->move($path,$filename);
        }

        $cambodia = Cambodia::create([
            'province' => $request->province,
            'province_image' => $filename,
        ]);
        $cambodia->save();

        return redirect()->back()->with('status','Item added successfully');
    }

    public function getcambodia(){
        $cambodia = DB::table('cambodia')->get();
        return view('dashboard.cambodia.addcambodia',['cambodia' => $cambodia]);
    }

    public function deleteCambodia($id){
        $deletecam = Cambodia::find($id);
        $destination = 'uploads/photos/'.$deletecam->image_province;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $deletecam->delete();
        return redirect()->back()->with('status','Deleted successfully');
    }

    public function editcam($id){
        $item = Cambodia::findOrFail($id);
        return view('dashboard.cambodia.editcambodia',compact('item'));
    }

    public function updatecam(Request $request,$id){
        $updatecam = Cambodia::findOrFail($id);
        $updatecam->province = $request->input('province');
        if($request->hasfile('province_image'))
        {
            $destination = 'uploads/photos/'.$updatecam->province_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }

            $file = $request->file('province_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/photos/',$filename);
            $updatecam->province_image = $filename;

        }
        $updatecam->update();

        return redirect(route('dashboard.cambodia.addcambodia'))->with('status','Item update successfully');
    }

}
