<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class MainPageController extends Controller
{
    //

    public function index(){

         $products = Product::where('featured',true)->take(6)->inRandomOrder()->get();
        //$products = Product::where('featured',true)->get();
        return view('landing')->with('products',$products);
    }
}
