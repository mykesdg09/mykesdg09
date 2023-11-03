<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;



class UserController extends Controller
{
    public function index(){
        return 'Hello from UserController';
    }
    public function show($id){

        $data = ["data" => "data from database"];
           return view('user')
                ->with('data', $data)
                ->with('name', 'Michael daniel') 
                ->with('age', 23)
                ->with('email', 'Michael daniel')
                ->with('id', $id);
    }
    
}
