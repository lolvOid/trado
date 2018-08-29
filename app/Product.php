<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
   use SearchableTrait;

   protected $fillable = [
    'name', 'slug','category_id', 'details', 'price', 'description', 'owner_id', 'images'
    ];
   protected $searchable = [
    /**
     * Columns and their priority in search results.
     * Columns with higher values are more important.
     * Columns with equal values have equal importance.
     *
     * @var array
     */
         'columns' => [
            'products.name' => 10,
            'products.details' => 5,
            'products.description' => 2,
        ],
    ];
    //
    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
    public function presentPrice(){
        $price = $this->price;
        return "$".(number_format(($price/100)-0.01,2));
    }
    public function scoperelated($query)
    {   
        # code...
        return $query->inRandomOrder()->take(4);
    }

}
