<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    public $timestamps = false;


    public function category(){
        return $this->belongsTo('App\Models\Category');
    }
    public function ingredients(){
        return $this->belongsToMany('App\Models\Ingredient','product_ingredients');
    }
    public function attributes(){
        return $this->belongsToMany('App\Models\Attribute','product_attribute_values')->withPivot('attribute_value');
    }


}
