<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Product;
use App\Category;
use Image;

class ProductsDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $categories = Category::all();

        if($user == null){
            return view('/');
        }
        //
        $products = Product::all()->where('owner_id', "=", $user->id);

        return view('productdata', compact('user', 'products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    } 

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uid = Auth::id();
        if($uid == null){
            return view('/login');
        }
        $filename = "/img/Trado.png";
        if($request->hasFile('product_img')){
            $product_img = $request->file('product_img');
            $filename = "/img/" . time() . $product_img->getClientOriginalExtension();
            Image::make($product_img)->resize(640, 426)->save( public_path( $filename ) );
        }

        Product::create([
            'owner_id'      => $uid, 
            'name'          => $request->input('name'),
            'slug'          => $request->input('slug'),
            'details'       => $request->input('details'),
            'price'         => $request->input('price'),
            'description'   => $request->input('descriptions'),
            'images'        => $filename
        ]); 
        return redirect()->route('productdata.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        dd($request->all()); 
        return route('productdata.index');
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $uid = Auth::id();
        if($uid == null){
            return view('/login');
        }
        
        $product = Product::find($request->input('id'));
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->details = $request->input('details');
        $product->price = $request->input('price');
        $product->description = $request->input('descriptions');

        if($request->hasFile('product_img')){
            $product_img = $request->file('product_img');
            $filename = "/img/" . time() . $product_img->getClientOriginalExtension();
            Image::make($product_img)->resize(640, 426)->save( public_path( $filename ) );
            $product->images = $filename;
        }

        // Product::create([
        //     'owner_id'      => $uid, 
        //     'name'          => $request->input('name'),
        //     'slug'          => $request->input('slug'),
        //     'details'       => $request->input('details'),
        //     'price'         => $request->input('price'),
        //     'description'   => $request->input('descriptions'),
        //     'images'        => $filename
        // ]); 
        // dd($product);
        $product->save();

        return redirect()->route('productdata.index')->with('success','Product Edit Successful');
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
    public function destroy(Request $request)
    {
        $product = Product::find($request->input("id"));
        $product->delete();
        return redirect()->route('productdata.index');
        // Product::all()->where('owner_id' , '=', Auth::id()->where('id', '=', $request->input())
    }
}
