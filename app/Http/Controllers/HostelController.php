<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hostel;

class HostelController extends Controller
{
    public function index()
    { 
      $hostel = Hostel::get();
      return view('hostel',[
        'hostel_list'=> 'MaMa', 
         'hostel'=> $hostel
        ]);

        
    }
  public function home(){
    return view('home');
  }
  // public function addData(Request $request)
  // {
  //     $name = $request->input('name');
  //     $profile_detail = $request->input('profile_detail');
  
  //     Hostel::table('hostel')->insert([
  //         'name' => $name,
  //         'profile_detail' => $profile_detail,
  //     ]);
  
  //     return redirect('/add')->with('success', 'Data added successfully!');
  // }
  
  public function add(){
    return view('add');
  }
}
