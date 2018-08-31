<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Blockchain;
use Auth;
use App\Wallet;
use App\User;
use Hash;
use App\helpers;
class WalletController extends Controller
{
    private $local_url = "http://localhost:3000";
    private $base_url = "http://blockchain.info";


    public function index(){
        
        return view('wallet/create');
    }


    //Create New Wallet**


    public function create(Request $request){
        $email = Auth::user()->email;
        $password = $request->password;
        
         $params = ['password' => $password ,
                    'api_code' => config('blockchain.blockchain_api'),
                    'email' => Auth::User()->email,
                    'label' => 'Main-receiving-Address',];    
        //$password = $request->password;
        try{
            $local_url = $this->local_url;
            $url = $local_url."/api/v2/create?".http_build_query($params);
            $json_data = file_get_contents($url);
            $json_feed = json_decode($json_data, true);
            $guid = $json_feed['guid'];
            $address = $json_feed['address'];
            $label = $json_feed['label'];
            $data = [$guid,$address,$label];
            

            Wallet::updateOrCreate([
                'wallet_id'=>$guid,
                'wallet_password'=>bcrypt($password),
                'main_address'=>$address,
                'label'=>$label,
                'user_id'=>Auth::user()->id,
            ]);
            
            return view('wallet/login');
           
       } 
       catch(\Exception $e){
           $message = "Can't connect to wallet service,Please Try Again!";
           return $message;         
       }
       
///Return to PAGE
    }
    public function show(){

        return view('wallet/showdata');
    }
    

    public function login(){  

        return view('wallet/login');
    }

    public function walletstore(Request $request)
    {
        
        $user = Auth::user();

        
    try{
            $guid = $request->guid;     
            $password = $request->password;    
        
            $my_balance = Blockchain::getWalletBalance($guid, $password);
            $check      = enableHD($guid,$password);
            $addressList = Blockchain::listAddress($guid,$password)['addresses'];

 
            
             return view('wallet/showdata')->with([  
                                                'mybalance'=>$my_balance,
                                                'addressList'=>$addressList,
                                                'guid'=>$guid, 
                                            ]);
            }
            catch(\Exception $e){
                    
                    return $msg;
            }
            
    }

    public function makeTransaction(Request $request){
        $user = Auth::user();
        $guid = Wallet::all()->where('user_id','=',$user->id)->first()->wallet_id;
        $address_a = $request->address_a;
        $address_b = $request->address_b;
        $fees =  config('blockchain.defaultBTCFee');
        $amount = $request->amount;
        $params = [ 'password' => $request->password ,
                    'to'=>$address_b,
                    'amount'=>$amount,
                    'from'=>$address_a,
                    'fee'=>$fees,                    
                  ];   

        $local_url = $this->local_url;
        $url = "$local_url/merchant/$guid/payment?".http_build_query($params);
        $json_data = file_get_contents($url);
        $json_feed = json_decode($json_data, true);
                  
        return redirect('wallet/showdata')->with(['data'->$json_feed,'fee'->$fees,'amount'->$amount]);
        
    }
    

  

  
}
