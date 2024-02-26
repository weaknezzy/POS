<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodBeverage(){

        return view('produk');
    }

    public function beautyHealth(){
        return view('beauty');
    }

    public function homeCare(){
        return view('home');
    }

    public function babyKid(){
        return view('baby');
    }
}
