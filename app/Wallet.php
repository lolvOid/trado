<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    //
    protected $fillable = ['user_id','wallet_id','main_address','wallet_password','label'];
}
