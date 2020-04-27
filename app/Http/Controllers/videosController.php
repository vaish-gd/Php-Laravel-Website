<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class videosController extends Controller
{
    //
    public function index(){

    	//return view('welcome');

    //  $data = model-vaishakh::all();

    	//return 6; do this and check localhost:8000

    	$sum = 85;

    	return view('welcome', compact("sum"));
    }
}
