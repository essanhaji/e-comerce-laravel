<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $fillable = [
        'user_id', 'billing_name', 'billing_email','billing_address',
        'billing_city','billing_phone','billing_postalCode','billing_discount',
        'billing_discount_code','billing_total','error',
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function products(){
        return $this->belongsToMany('App\Product')->withPivot('quantity');
    }
}
