<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function showcategory(){
        return view('dashboard.category.addcategory');
    }

    public function createcategory(Request $request){
        if($request->has('category_image')){
            $file = $request->file('category_image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $path = 'uploads/photos/';
            $file->move($path,$filename);
        }
        $category = Category::create([
            'category_no' => $request->category_no,
            'category_name' => $request->category_name,
            'category_image' => $filename,
        ]);
        $category->save();
        return redirect()->back()->with('status','Category added successfully');
    }

    public function getcategory(){
        $getcategory = DB::table('category')->get();
        return view('dashboard.category.addcategory',['getcategory' => $getcategory]);
    }

    public function delete($id){
        $deletecat = Category::find($id);
        $destination = 'uploads/photos/'.$deletecat->category_image;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $deletecat->delete();
        return redirect()->back()->with('status','Deleted successfully');
    }
}
