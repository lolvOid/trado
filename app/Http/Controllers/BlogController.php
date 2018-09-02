<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class BlogController extends Controller
{
    public function index(Request $request){
        $user = Auth::user();
        return view('blog')->with(["user"=>$user]);
    }
}
