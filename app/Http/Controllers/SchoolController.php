<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function school(){
        return view('school.schoolhome');
    }

    public function studentdetails(){
        return view('school.studentdetails');
    }

    public function studentform(){
        return view('school.studentform');
    }
}
