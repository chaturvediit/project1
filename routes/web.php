<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\LoginDashboard;
use App\Http\Controllers\TestMiddelwarecode;
//use App\Models\Customer;
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
Route::get('/form', [DemoController::class, 'submit_data'])->middleware('ikc');
Route::post('/form_action', [DemoController::class, 'registration']);
Route::get('/show',  [DemoController::class, 'show_data']);
Route::get('/image',  [DemoController::class, 'select_image']);
Route::post('/upload',  [DemoController::class, 'upload']);
Route::get('/del/{id}',  [DemoController::class, 'remove_data']);
Route::get('/edit/{id}', [DemoController::class, 'edit_data'])->name('edit.customer');
Route::post('/update/{id}', [DemoController::class, 'update_data'])->name('update.customer');
/*================================Registration form==============================*/
Route::get('/user-registration', [LoginDashboard::class, 'index']);
Route::post('/user-insert', [LoginDashboard::class, 'submit_registration_data']);
Route::get('/user-login', [LoginDashboard::class, 'loginview']);
Route::post('/loginuser', [LoginDashboard::class, 'loginuser']);
Route::get('/user-logout', [LoginDashboard::class, 'logoutuser']);

Route::get('/in-middle', [TestMiddelwarecode::class, 'index'])->middleware('ikc');
//Route::get('/login',[DemoController::class, 'submit_data']);



/*================================Language Change===========================*/
Route::get('/{lange?}', [DemoController::class, 'index']);



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

