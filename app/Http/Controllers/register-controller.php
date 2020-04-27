<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class register-controller extends Controller
{
    //
    public function index(){

      //return view('welcome');

    //  $data = model-vaishakh::all();

      //return 6; do this and check localhost:8000

      $sum = 85;

      $videos = DB::select('select * from videos ');

      return view('videos', ['videos' => $videos]);
    }
}
