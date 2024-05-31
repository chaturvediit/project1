<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index()
    {
      //  $data=compact();
       return view('home',['name' => 'Mahakal','address'=>'<h2>This is my html code</h2>']); 
    }
}
