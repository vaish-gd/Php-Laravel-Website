<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

use App\Http\Controllers\Controller;

class register-controller extends Controller
{

  public function insertform() {
      return view('stud_create');
   }
    //
    public function index(){

      //return view('welcome');

    //  $data = model-vaishakh::all();

      //return 6; do this and check localhost:8000

      $sum = 85;

      $register = DB::select('select * from Register ');

      return view('videos', ['videos' => $videos]);
    }

    public function putData(Request $request){

      //return view('welcome');

      echo $request;

    //  $data = model-vaishakh::all();

      //return 6; do this and check localhost:8000

      $email = $request->input('email');
      $name = $request->input('name1');
      $password = $request->input('password');
      $address =  $request->input('address');

     DB::insert('insert into Register (name,email,password,address) values(?,?,?,?)',[$name]
   ,[$email],[$password],[$address]);
     echo "Record inserted successfully.<br/>";
     //echo '<a href = "/insert">Click Here</a> to go back.';


    }
}
