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
            return redirect()->route('login');
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
            return redirect()->route('login');
        }
        $filename = "/img/Trado.png";
        if($request->hasFile('product_img')){
            $product_img = $request->file('product_img');
            $filename = "/img/" . time() . $product_img->getClientOriginalExtension();
            Image::make($product_img)->resize(640, 426)->save( public_path( $filename ) );
        }
        
       $featured = $request->input('featured');
       
       if($featured == 'on'){
           $featured = 1;
       }else{
           $featured = 0;
       }
        Product::create([
            'owner_id'      => $uid, 
            'name'          => $request->input('name'),
            'slug'          => $request->input('slug'),
            'category_id'      => $request->input('category'),
            'details'       => $request->input('details'),
            'price'         => ($request->input('price') * 100),
            'featured'      => $featured,
            'description'   => $request->input('description'),
            'images'        => $filename
        ]); 
        return redirect()->route('productdata.index')->with('success','Product Add Successful');;
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
        // dd($request);
        $user = Auth::user();
        $productId = $request->id;
        $product = Product::where('id' , '=', $productId)->first();
        $categories = Category::all();
        return view('productedit', compact("product", "user", "categories"));
    }

    public function add(Request $request)
    {
        // dd($request);
        $user = Auth::user();
        // $productId = $request->id;
        // $product = Product::where('id' , '=', $productId)->first();
        $categories = Category::all();
        return view('productAdd', compact("user", "categories"));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $uid = Auth::id();
        if($uid == null){
            return redirect()->route('login');
        }
        $featured = $request->input('featured');
       if($featured == 'on'){
           $featured = 1;
       }else{
           $featured = 0;
       }
        $product = Product::find($request->input('id'));
        $product->name = $request->input('name');
        $product->slug = $request->input('slug');
        $product->details = $request->input('details');
        $product->price = $request->input('price') * 100;
        $product->description = $request->input('description');
        $product->category_id = $request->input('category');
        $product->featured = $featured;
        if($request->hasFile('product_img')){
            $product_img = $request->file('product_img');
            $filename = "/img/" . time() . $product_img->getClientOriginalExtension();
            Image::make($product_img)->fit(640, 480)->save( public_path( $filename ) );
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
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $product = Product::find($request->input("id"));
        $product->delete();
        return redirect()->route('productdata.index')->with('success','Product Delete Successful');
        // Product::all()->where('owner_id' , '=', Auth::id()->where('id', '=', $request->input())
    }
}
