<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\Product;
use Auth;
class CartController extends Controller
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
            return redirect()->route("login");
        }
        $cart = Cart::count();
       
        $related = Product::related()->get();
        return view('shoppingcart')->with(['related'=>$related, 'user'=>$user]);
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
    
        $duplicates = Cart::search(function ($cartItem,$rowId) use ($request){
            return $cartItem->id == $request->id;
        });
        
        if($duplicates->isNotEmpty()){
            return redirect()->route('cart.index')->with('success_message','Item is already in your card');
        }
        
        Cart::add($request->id,$request->name,1,$request->price)
            ->associate('App\Product');
        
            return redirect()->route('cart.index')->with('success_message','Item was added');
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
        Cart::remove($id);
        return back()->with('success_message','Item has been removed');
    }
    
     public function switchToSaveForLater($id)
    {
        # code...
        $item = Cart::get($id);
        Cart::remove($id);
        Cart::instance('saveForLater')->add($item->id,$item->name,1,$item->price)
            ->associate('App\Product');

        return redirect()->route('cart.index')->with('success_message','Item has been saved for later');
    }
}
