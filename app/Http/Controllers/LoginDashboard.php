<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Crypt;


class LoginDashboard extends Controller
{
public function index()
 {
    return view('rgist_form.registrationform');

 }
public function submit_registration_data(Request $req)
{

   $validated = $req->validate([
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required|confirmed',
      'dob' => 'required'
  ]);
 
//   echo"<pre>";
//   print_r($req->all());


$Customer=new User;
 $Customer->name = $req['name'];
 $Customer->email = $req['email'];
 //$Customer->dob = $req['dob'];
 $Customer->password = Hash::make($req['password']);//this is ok
 //$Customer->password = md5($req['password']);
 //$Customer->password = Crypt::encryptString($req['password']);
 $Customer->save();
 return redirect('/user-login');
}

public function loginview()
{
   return view('rgist_form.login');
}

public function loginuser(Request $req)
{

   $credentials = $req->validate([
      'name' => ['required'],
      'password' => ['required'],
  ]);

  if (Auth::attempt($credentials)) 
// if (Auth::attempt($req->only('password','email')))
  {
      return redirect('/form');
  }
else{
   return redirect('/');

}



}

public function logoutuser()
{
   Auth::logout();
  return redirect('/');
  

}


}
