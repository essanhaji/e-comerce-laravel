<?php

namespace App\Http\Controllers;

use App\Coupon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CouponsController extends Controller
{

    public function store(Request $request)
    {
        $coupon=Coupon::where('code', $request->coupon_code)->first();

        if(!$coupon){
            return redirect()->route('cart-page')->withErrors('Invalid coupon code try again.');
        }
        
        // si il y a une coupon dans notre BD on fait le discount et on met le nouveux prix dans session
        session()->put('coupon',[
            'name'=>$coupon->name,
            'discount'=>$coupon->discount(Cart::subtotal()),
        ]);

        return redirect()->route('cart-page')->with('success_message','Coupon has been applied!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        session()->forget('coupon');
        return redirect()->route('cart-page')->with('success_message','Coupon has been deleted!');

    }
}
