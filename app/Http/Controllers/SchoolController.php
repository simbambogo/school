<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function school(){
        return view('school.schoolhome');
    }

    public function studentdetails(){
        return view('school.student.studentdetails');
    }

    public function studentform(){
        return view('school.student.studentform');
    }

    public function teacherdetails(){
        return view('school.teacher.teacherdetails');
    }

    public function teacherform(){
        return view('school.teacher.teacherform');
    }
}
