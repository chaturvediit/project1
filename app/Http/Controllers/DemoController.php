<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use Illuminate\Support\Facades\Validator;
use App\Models\Customer;

class DemoController extends Controller
{
    public function index()
    {
      //  $data=compact();
       return view('home',['name' => 'Mahakal','address'=>'<h2>This is my html code</h2>']); 
    }

    public function submit_data()
    {
      return view('form');
    }
    
    public function registration(Request $req)
    {
      $validated = $req->validate([
        'name' => 'required',
        'email' => 'required|email',
        'pswd' => 'required',
        'cpswd' => 'required',
        'contry' => 'required',
        'state' => 'required',
        'address' => 'required',
        'gender' => 'required',
        'dob' => 'required'
    ]);

    // echo"<pre>";
    // print_r($req->all());

  //   return [
  //     'name.required' => 'A title is required',
  //     'email.required' => 'A message is required',
  // ];


//   $validator = Validator::make($req->all(), [
//     'name' => 'required',
//     'email' => 'required',
// ]);

// if ($validator->fails()) {
//     return redirect('/')
//                 ->withErrors($validator)
//                 ->withInput();
// }


// [_token] => xeUqvRPqmavBsQwvUVkhNLzG82hCEnySZ6ghr47X
// [name] => afasdfa
// [email] => tt@gmail.com
// [pswd] => 12345
// [cpswd] => 12345
// [contry] => india
// [state] => Delhi
// [address] => sgadsfga
// [optradio] => on
// [dob] => 2024-06-14
 $Customer=new Customer;
 $Customer->name = $req['name'];
 $Customer->email = $req['email'];
 $Customer->gender = $req['gender'];
 $Customer->address = $req['address'];
 $Customer->state = $req['state'];
 $Customer->country = $req['contry'];
 $Customer->dob = $req['dob'];
 $Customer->password = md5($req['pswd']);
 $Customer->save();
 return redirect('/show');

}
public function show_data()
{

  //$users = DB::select('select * from customers');
  $Customer=Customer::all()->Toarray();
    $data=compact('Customer');
  // echo"<pre>";
  // print_r($Customer);die;

return view('show', $data);

}

public function remove_data($id)
{
  $Customer=Customer::find($id);
  if(!is_null($Customer))
  {
    $Customer->delete();

  }
  return redirect('/show');
  // echo"<pre>";
  // print_r($Customer);die;
 // return'Delete data';
}


}
