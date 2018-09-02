
<?php

use Illuminate\Support\Facades\Request;
use App\Product;
use App\User;
use App\comment;

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
function enableHD($guid,$wallet_password)
{
    $local_url = "http://localhost:3000";
    $url = "$local_url/merchant/$guid/enableHD?password".http_build_query([$wallet_password]);
}

function ChartData(){

    return BlockChain::GetStats();
    
}
function getChart($chartName,$timespan,$rollingAverage,$start,$format,$sampled)
{

    $base_url = "https://api.blockchain.info";

    $params = [
        'charts'=>$chartName,
        'timespan' =>$timeSpan,
        'rollingAverage'=>$rollingAverage,
        'start'=>$start,
        'format'=>$format,
        'sampled'
    ];
    $url = $base_url.http_build_query($params);
    dd($url);
}

function getTimeToDate($time){
    return explode(" ", $time)[0];
}

function getBtcBalance($guid, $password){
    return Blockchain::getWalletBalance($guid, $password);
}

function getCommentedUserName($comment){
    return User::where('id', $comment->cmt_user_id)->first()->name;
}

function getCommentedUserAvatar($comment){
    return User::where('id', $comment->cmt_user_id)->first()->avatar;
}

function getUSDToBtc($usd){
    // dd("https://blockchain.info/tobtc?currency=USD&value=" . ($usd/100));
    return file_get_contents("https://blockchain.info/tobtc?currency=USD&value=" . ($usd/100));
}