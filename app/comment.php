<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = [
        'owner_id', 'user_id', 'comment','product_id', 'cmt_user_id'
    ];
}
