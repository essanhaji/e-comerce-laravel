<?php

namespace App\Http\Controllers;

use Validator;
use App\Product;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
class CartController extends Controller
{

    public function index()
    {
        $coupon_discount=session()->get('coupon')['discount'];
        $new_total=(Cart::subtotal() - $coupon_discount);
        if($new_total<0){
            $new_total = 0;
        }
        return view('cart',compact('coupon_discount','new_total'));
    }


    public function store(Request $request)
    {
        $price = Cart::total(0);

        // avant d'ajouter le produit a panier, on doit chercher si il y a déja en panier ou pas, si il y a pas ajouter au panier
        $duplicate = Cart::search(function($cartItem, $rowId) use($request){
            return $cartItem->id === $request->id;
        });
        if($duplicate->isNotEmpty()){
            return redirect()->route('cart-page')->with('success_message','Product is already in your cart ! ');
        }

        Cart::add($request->id,$request->name,1,$request->price)
            ->associate('App\Product');
        return redirect()->route('cart-page')->with('success_message','Product was added to your cart !');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        

        $product=Product::where('name',$request->name)->firstOrFail();

        $validator = Validator::make($request->all(), [
            'quantity'=> 'required|integer|between:1,'.$product->stock
        ]);

        if ($validator->fails()) {
            return redirect()->route('cart-page')
                        ->withErrors("Quantity you entred doesn't existe in our stock !!");
        }


        Cart::update($id,$request->quantity);
        return redirect()->route('cart-page')->with('success_message','You have been changed quantity !! ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::remove($id);
        return back()->with('success_message','Item has been removed ! ');

    }

    // public function wishlist_index(){
    //     return view('wishlist',compact('products'));

    // }

    public function saveForLater(Request $request){
        
        $duplicate = Cart::instance('save')->search(function($cartItem, $rowId) use($request){
            return $cartItem->id === $request->id;
        });
        if($duplicate->isNotEmpty()){
            return back()->withErrors("This item already in your wishlist !!");
        }

        Cart::instance('save')->add($request->id,$request->name,1,$request->price)
            ->associate('App\Product');
            return back()->with('success_message','You item has been added to wishlist !');
    }
}
