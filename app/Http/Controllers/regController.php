<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

class regController extends Controller
{
    //

    public function index(Request $req){

      //echo "hi";
      $req -> validate(["email" => 'required|email|',

      "name1" => 'required',

      "password" => ['regex:/[a-z]/',      // must contain at least one lowercase letter
            'regex:/[A-Z]/',      // must contain at least one uppercase letter
            'regex:/[0-9]/',      // must contain at least one digit
            'regex:/[@$!%*#?&]/',
            'required',
            'min:8',
            'max:10'],

      "address" => 'required',

      "confirmPassword" => 'required|same:password'

    ]);

  

    $registeredDetails = DB::select('select * from Register ');

  //  echo $registeredDetails;

      $boolean1= false;
    foreach ($registeredDetails as $detail) {
      // code...

      $email1=$detail->email;



      if($email1==$req->input('email')){
        $boolean1=true;
        //echo $email1;
        return redirect()->back()->with('alert', 'Email exists in db');
      }

    }

      if($boolean1===false){}

        $request=$req;
        $email = $request->input('email');
        $name = $request->input('name1');
        $password = $request->input('password');
        $address =  $request->input('address');



       //DB::insert('insert into Register (name,email,password,address) values(?,?,?,?)',[$name]
  //   ,[$email],[$password],[$address]);
    //   echo "Record inserted successfully.<br/>";

    $values = array('name' => $name,'email' => $email, 'password' =>$password,'address' => $address );
DB::table('Register')->insert($values);

        return $req->input();


      //return view('welcome');

    //  echo $request;

    //  $data = model-vaishakh::all();

      //return 6; do this and check localhost:8000

    /*  $email = $request->input('email');
      $name = $request->input('name1');
      $password = $request->input('password');
      $address =  $request->input('address');

     DB::insert('insert into Register (name,email,password,address) values(?,?,?,?)',[$name]
   ,[$email],[$password],[$address]);*/

  //   echo "Record inserted successfully.<br/>";
     //echo '<a href = "/insert">Click Here</a> to go back.';


    }
}
