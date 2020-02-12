<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;

class EducationController extends Controller
{
    function index()
    {
      return view('admin.education.index');
    }

    //Eduction Info
    function education_info()
    {
      $all_education = Education::all();
      return view('admin.education.info',compact('all_education'));
    }
    //Education Insert
    function Insert(Request $request)
    {
      Education::insert([
        'institute_name' =>$request->institute_name,
        'degree' =>$request->degree,
        'passing_year' =>$request->passing_year,
        'gpa' =>$request->gpa,
        'duration' =>$request->duration,
      ]);
      return redirect(route('education_info'));;
    }
}
