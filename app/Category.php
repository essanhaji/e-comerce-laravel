<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';

    //la relation entre table Ctagory et Product;  category peux avoir 1 et plusier seul produit
    public function products(){
       return $this->belongsToMany('App\Product');
    }
}
