<?php

namespace App\Http\Controllers;
use App\Models\student;
use Carbon\Carbon;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){

        $students = student::all();

        return view('student.index', ['students' => $students]);
    }
    public function viewcreate(){
        return view('student.create');
    }
    public function create(Request $request){
        $id = Carbon::now()->format('dmYHis');
        $student = student::create([
            'studentId' => $id,
            'stuNameEN' => $request->stuNameEN,
            'stuNameKh' => $request->stuNameKh,
            'sex' => $request->sex,
            'dob' => $request->dob,
            'age' => $request->age,
            'phone' => $request->phone,
            'streetNumber' => $request->streetNumber,
            'village' => $request->village,
            'commune' => $request->commune,
            'district' => $request->district,
            'province' => $request->province,
            'country' => $request->country,
            'created_by' => $request->created_by,
            'updated_by' => $request->updated_by,
            'img' => null
        ]);
        if($student){
            return redirect(route('student.index'));
          //  return response()->json(['status' => 1, 'message' => 'created successfully']);
        }

    }
}
