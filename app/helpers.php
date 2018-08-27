
<?php

use Illuminate\Support\Facades\Request;

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
