
<?php

use Illuminate\Support\Facades\Request;
use App\Product;
use App\User;

function productImage($path){
     return file_exists('storage/'.$path)?('storage/'.$path):('images/not found');
}
function assestproductImage($path){
    return file_exists('storage/'.$path)?asset('storage/'.$path):asset('images/not found');
}
function presentPrice($price){
    return "$".(number_format(($price/100)-0.01,2));
}
function discountPrice($price,$discount){
    return "$".(number_format((($price/100)-0.01)-((($price/100)-0.01)*($discount/100)),2));
}

function calTax($price, $tax){
    return "$".(number_format((($price/100)-0.01)+((($price/100)-0.01)*($tax/100)),2));
}

function cleanProducts(){
    $users = User::all();
    $products = Product::all();
    foreach($products as $product){
        if($users->where('id',$product->owner_id)->first() == null){
            $product->delete();
        }
    }
}