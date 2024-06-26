<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Models\Customer;
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
Route::get('/form', [DemoController::class, 'submit_data']);
Route::post('/form_action', [DemoController::class, 'registration']);
Route::get('/show',  [DemoController::class, 'show_data']);
Route::get('/del/{id}',  [DemoController::class, 'remove_data']);
// Route::get('/show', function () {
// $Customer=Customer::all()->toArray();

// echo"<pre>";
// print_r($Customer);die;

// });


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

