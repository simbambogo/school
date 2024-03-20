<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\storestudent;

class SchoolController extends Controller
{
    public function school(){
        return view('school.schoolhome');
    }

    public function studentdetails(){
        $data = storestudent::all();
        return view('school.student.studentdetails', ['data' => $data]);
    }

    public function studentform(){
        return view('school.student.studentform');
    }

    public function studentstore(Request $request){
        $data = $request->validate([
            'fullname' => 'required',
            'email' => 'required',
            'tel' => 'required',
        ]);
        //store data
        storestudent::create($data);

        //redirect
        return redirect(route('studentdetails'))->with('success','data successful saved');
    }

    public function teacherdetails(){
        return view('school.teacher.teacherdetails');
    }

    public function teacherform(){
        return view('school.teacher.teacherform');
    }
}
