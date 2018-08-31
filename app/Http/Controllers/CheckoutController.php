<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Auth;
use Config;
use Stripe;
use App\User;
class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user == null){
            return redirect()->route('login');
        }
        //
        return view('checkout', compact("user"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $user = Auth::user();
        if($user == null){
            return redirect()->route('login');
        }

       Stripe::setApiKey("sk_test_6I5FOmfWCwXAEdR8BNAYHsHp");

       try{
        $token = $request->stripeToken;
        $testToken = "tok_visa";
        $charge = Stripe::charges()->create([
            'amount' => Cart::total()/100,
            'currency' => 'usd',
            'description' => 'Example charge',
            'source' => $testToken, 
            "customer" => [
                      "email" => $request->email,],
                    'metadata'=>[
                       
                       /*  "contents"=>$contents,
                        'quantity'=>Cart::instance('default')->count(),  */
                    ],
        ]);
                // $charge = Stripe::charges()->create([
        
                //     "type" => "ach_credit_transfer",
                //     "currency" => "usd",
                //     "owner" => [
                //       "email" => $request->email,],
                //     'metadata'=>[
                       
                //        /*  "contents"=>$contents,
                //         'quantity'=>Cart::instance('default')->count(),  */
                //     ],
                        
                // ]);

                
                

                return back()->with(['success_message'=>'Thank you!Your Payment has been successfully accepted!', 'user'=>$user]);
       
        }
        catch(Exception $ex){
                
        }
        
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
        //
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
