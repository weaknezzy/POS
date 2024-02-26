<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function ShowProfile($id,$name){
        return view('user');
    }
}
