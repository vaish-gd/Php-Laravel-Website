<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class equipoController extends Controller
{
    //

    public function index(){

    	//return view('welcome');

    //  $data = model-vaishakh::all();

    	//return 6; do this and check localhost:8000

    	$sum = 85;

      $professors = DB::select('select * from professor2 order by id desc ');

    	return view('equipo', ['professors' => $professors]);
    }
}
