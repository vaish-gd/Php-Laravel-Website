<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Redirect;

use DB;

use App\Http\Requests;

class loginController extends Controller
{
    //
    public function index(Request $request){

      $req = $request;

      $req -> validate(["email" => 'required|email|',



      "password" => ['regex:/[a-z]/',      // must contain at least one lowercase letter
            'regex:/[A-Z]/',      // must contain at least one uppercase letter
            'regex:/[0-9]/',      // must contain at least one digit
            'regex:/[@$!%*#?&]/',
            'required',
            'min:8',
            'max:10']
          ]);

    $registeredDetails = DB::select('select * from Register ');

    $boolean1= false;
  foreach ($registeredDetails as $detail) {
    // code...

    $email1=$detail->email;
    $pass1 = $detail->password;



    if($email1==$req->input('email') ){

      if( $pass1 !=  $req->input('password')){

        return redirect()->back()->with('alert', 'Email exists in db but password incorrect');
      }

      $boolean1=true;
      //echo $email1;
      if( $pass1 ==  $req->input('password')){

        if(strpos("admin",$email1)===true){

          //return redirect()->route('admin');

          return view('admin');

        }
        else{
          //  return redirect()->route('student');

           return view('student');

        }


      }

    }

  }

  return redirect()->back()->with('alert', 'Email doesnt exists in db');

    }
}
