<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
use DB;
use App\User; 
use App\Product; 
use Input;
use Image;
class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $user = User::find(Auth::id());
        if($user == null){
            $products = Product::all();
            
        }
        return view('profile')->with('user', $user);
       //return view('profile', compact('name','email', 'username', 'contact'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        //
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all()['email']);
        $user = array();

        $user['name']      = $request->input('name');
        $user['username']      = $request->input('username');
        $user['email']      = $request->input('email');
        $user['password']      = $request->user()->password;        
        $user['contact']      = $request->input('contact');


        //     'username'  -> $request->input('username'),
        //     'email'     -> $request->input('email'),
        //     'password'  -> $request->input('password'),
        //     'contact'   -> $request->input('contact')]
        // );

        User::whereId($request->user()->id)->update($user);

        //return view('profile')->with('user', $user);
        return redirect()->route('profile.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $user = User::find($id);
        dd($user);
    
        //
        return view('profile')->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        User::update($id, $request->user());
        return view('profile');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function upload(Request $request){
        if($request->hasFile('avatar')){
            $avatar = $request->file('avatar');
            $filename = "/users/" .  time() . '.' . $avatar->getClientOriginalExtension();
            
            Image::make($avatar)->resize(300, 300)->save( public_path( $filename ) );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return redirect()->route('profile.index');
    }
}
