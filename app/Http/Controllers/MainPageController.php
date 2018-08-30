<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Product;
use App\User;
class MainPageController extends Controller
{
    //

    public function index(Request $request){

         $products = Product::where('featured',true)->take(6)->inRandomOrder()->get();
        //$products = Product::where('featured',true)->get();
        
        $user = User::find(Auth::id());
        if($user== null){
            $user = new User();
        }
        
        return view('landing', compact('products','user'));
    }
}
