<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Experience;

class ExperienceController extends Controller
{
    function experience_index()
    {
      return view('admin.experiences.index');
    }

    //Experience Info
    function experience_info()
    {
      $all_experience_info = Experience::all();
      return view('admin.experiences.info',compact('all_experience_info'));
    }
    //Experience Insert
    function experience_insert(Request $request)
    {
      Experience::insert([
        'position' =>$request->position,
        'company' =>$request->company,
        'type' =>$request->type,
        'duration' =>$request->duration,
      ]);
      return redirect(route('experience_info'));
    }

    //Experience Edit
    function experience_edit($id)
    {
      $single_experience = Experience::findOrFail($id);
      return view('admin.experiences.edit',compact('single_experience'));
    }
    //Experience Update
    function experience_update(Request $request)
    {
      Experience::findOrFail($request->id)->update([
        'position' =>$request->position,
        'company' =>$request->company,
        'type' =>$request->type,
        'duration' =>$request->duration,
      ]);
      return redirect(route('experience_info'));
    }
}
