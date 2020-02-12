<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AddressLine;
use App\Objective;
use App\Link;

class AdminController extends Controller
{
    function index()
    {
      return view('admin.index');
    }

    //AddressLine Input
    function address_line()
    {
      return view('admin.addressline.input');
    }

    //AddressLine Insert
    function addressline_insert(Request $request)
    {
      AddressLine::insert([
        'address' =>$request->address,
        'contact' =>$request->contact,
        'email' =>$request->email,
        'status' =>1,
      ]);
      return redirect(route('addressline_info'));
    }
    //AddressLine Info
    function addressline_info()
    {
      $all_addressline_info = AddressLine::all();
      return view('admin.addressline.info',compact('all_addressline_info'));
    }

    //AddressLine Edit
    function addressline_edit($id)
    {
      $single_info = AddressLine::findOrFail($id);
      return view('admin.addressline.edit',compact('single_info'));
    }

    //AddressLine Update
    function addressline_update(Request $request)
    {
      // echo $request;
      AddressLine::findOrFail($request->id)->update([
        'address' =>$request->address,
        'contact' =>$request->contact,
        'email' =>$request->email,
        'status' =>$request->status,
      ]);
      return redirect(route('addressline_info'));
    }

    //Objective Index
    function objective_index()
    {
      return view('admin.objectives.index');
    }
    //Objective Insert
    function objective_insert(Request $request)
    {
      Objective::insert([
        'objective' =>$request->objective,
        'status' =>1,
      ]);
      return redirect(route('objective_info'));
    }

    //Objective Information
    function objective_info()
    {
      $all_objectives = Objective::all();
      return view('admin.objectives.info',compact('all_objectives'));
    }

    //Objective Edit
    function objective_info_edit($id)
    {
      $single_objective = Objective::findOrFail($id);
      return view('admin.objectives.edit',compact('single_objective'));
    }

    //Update Objective
    function objective_update(Request $request)
    {
      Objective::findOrFail($request->id)->update([
        'objective' =>$request->objective,
        'status' =>$request->status,
      ]);
      return redirect(route('objective_info'));
    }

    //Links Information
    function link_info()
    {
      $all_link_info = Link::all();
      return view('admin.links.info',compact('all_link_info'));
    }

    //Links Form
    function link_index()
    {
      return view('admin.links.index');
    }

    //Links Insert
    function link_insert(Request $request)
    {
      Link::insert([
        'link' =>$request->link,
        'icon_class' =>$request->icon_class,
      ]);
      return redirect(route('link_info'));
    }

    //Edit links
    function link_edit($id)
    {
      $single_link_info = Link::findOrFail($id);
      return view('admin.links.edit',compact('single_link_info'));
    }
    //Update Links
    function link_update(Request $request)
    {
      Link::findOrFail($request->id)->update([
        'link' =>$request->link,
        'icon_class' =>$request->icon_class,
      ]);
      return redirect(route('link_info'));
    }

//End
}
