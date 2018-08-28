<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Auth;
use DB;
use App\User;
class ProfilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $uid = $request->user()->id;
        
        //$userprofile = Auth::user()->id;

        /* $name = DB::table('users')
                ->select('name')
                ->where('id',$uid)
                ->get();
                
        $email = DB::table('users')
                ->select('email')
                ->where('id',$uid)
                ->get();         */
        $name = User::select('name')->where('id','=', $uid)->get();
        $email= User::select('email')->where('id','=',$uid)->get(); 
        
        /* return view('profile')->with(['name'=>$name,'username'=>$username,'number'=>$number,'email'=>$email]); */
       return view('profile')->with(['name'=>$name,'email'=>$email]);
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
        //


        return view('dashboard');
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
    public function edit(Reponse $request,$id)
    {   
        $uid = $request->user()->id;
        $user = User::find($id);
    
        //
        return view('profile')->with('data',$userdata);
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
        $uid = $request->user()->id;
        if (!$request->ajax()) {
            $this->insertUpdateData($request, $name, $email, $password,$data);
            User::where('email',$id)->where('name',$id)->where('username',$id)->where('contact',$id)->where('password',$id)->delete();
            $this->updateUser($request,$id);
           
      }  
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
}
