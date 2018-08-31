<?php

namespace App\Http\Controllers;

//use Illuminate\Support\Facades\Request;
use Illuminate\Http\Request;
//use Illuminate\Http\Request;

use App\User;
use App\Product;
use App\Category;
use Auth;
class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = Auth::user();
        $users = User::all();
        cleanProducts();
        if(request()->category){
            $products = Product::with('categories')->whereHas('categories',function($query){
                $query->where('slug',request()->category);
            })->get();
            $categories = Category :: all();
            $categoryName = $categories->where('slug',request()->category)->first()->name;
        }else{
            $products = Product::paginate(9);
            $categories = Category::all();    
            $categoryName = 'Featured';
        }
        // dd($products->total());
        // if(request()->sort == 'lowhigh'){
        //     $products = $products -> sortBy('price');
        // }else if(request()->sort == 'highlow'){
        //     $products = $products -> sortByDesc('price');
        // }
        $trendings = Product::where('featured',true)->take(6)->inRandomOrder()->get();
        return view('shop')->with([
            'products'=>$products,
            'categories'=>$categories,
            'categoryName'=>$categoryName,
            'user'=>$user,
            'users'=>$users,
            'trendings'=>$trendings
            ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //
        $user = Auth::user();
        if($user == null){
            $user = new User();
        }
        $product = Product::where('slug',$slug)->firstOrFail();
        $related = Product::where('slug','!=',$slug)->related()->get();

        return view('product')->with(['product'=>$product,'related' =>$related, 'user'  => $user]);
    }

    public function showcategory(Request $request, $id)
    {
        
        //
        $user = Auth::user();
        if($user == null){
            $user = new User();
        }
        $products = Product::where('category_id',$id)->get();
       // $related = Product::where('slug','!=',$slug)->related()->get();
       $categories = Category::all();
       $users = User::all();
        return view('shop')->with(['products'=>$products, 'user'  => $user, 'users'=>$users, 'categories'=>$categories]);
    }

    public function search(Request $request){
        $user = Auth::user();
        if($user == null){
            $user = new User();
        }
        $request->validate([
            'query'=>'required|min:3',
        ]);
        
        $query = $request->input('query');
        $products = Product::where('name','like',"%$query%")
                            ->orWhere('details','like',"%$query%")
                            ->orWhere('description','like',"%$query%")
                            ->paginate(10);
        //$products = Product::search($query);

        return view('search-results-table')->with(['products'=>$products, 'user'=>$user ]);


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
