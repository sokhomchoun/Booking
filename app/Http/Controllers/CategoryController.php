<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
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
}
