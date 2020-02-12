<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddressLine;
use App\Objective;
use App\Link;
use App\Experience;
use App\Education;
class HomepageController extends Controller
{
    function Index()
    {
      $all_addressline_info = AddressLine::all();
      $objective = Objective::all();
      $all_links = Link::all();
      $all_experiences = Experience::all();
      $all_education = Education::all();
      return view('cv.index',compact('all_addressline_info','objective','all_links','all_experiences','all_education'));
    }

}
