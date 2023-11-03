<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get();     pag kuha
//Route::post();    pag input/paglagay
//Route::put();     pag palit/update kabuuan ng data
//Route::patch();   pag palit ng specific/small portion na data
//Route::delete();  pagdelete ng data
//Route::options(); 


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::match(['get','post'], '/', function() {  //for 2 options
//     return 'POST and GET is allowed';
// });

// Route::any('/', function(){    //alows anything to input
//        return view('welcome');
// });     


// Route::redirect('/welcome', '/');   //redirect-pagbalik


// Route::get('/', function() {
//     return 'Welcome!';
// });

// Route::get('/users', function(Request $request){
//     dd($request);
//      return null;
// });

//user id and group name
// Route::get('/user/{id}/{group}', function($id, $group) {
//     return response($id.'-'.$group, 200);
               
// });

// //json file
// Route::get('/request-json', function(){
//     return response()->json(['name' => 'Antok na ako', 'age' => '23']);
// });


// //sample for request download
// Route::get('/request-download', function() {
            
//             $path = public_path().'/sample.txt';
//             $name = 'sample.txt';
//             $headers = array(
//                 'Content-type : application/text-plain',
//             );
//             return response()->download($path , $name, $headers);
// });


Route::get('/', [StudentController::class, 'index']);

Route::get('/users', [UserController::class, 'index']);

Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/student/{id}', [StudentController::class, 'show']);

