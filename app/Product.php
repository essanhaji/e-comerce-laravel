<?php

namespace App;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //pour algoliya, pour dire on va faire la recheche pour les produits
    use Searchable;

    protected $fillable=['stock'];

    //les relation entre table Product et Ctagory; produit peux avoir 1 et un seul category
    public function categories(){
     
        return $this->belongsToMany('App\Category');
     }
}
