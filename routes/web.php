<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [DemoController::class, 'index']);


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/demo', function () {

// return view('demo',['name' => 'Mahakal','address'=>'<h2>This is my html code</h2>']);
// });
// Route::get('/home/{name?}', function ($name="") {
//     $data=compact('name');
// return view('home')->with($data);
// });
// Route::get('/about', function () {
//     return view('layout.about');
// });

