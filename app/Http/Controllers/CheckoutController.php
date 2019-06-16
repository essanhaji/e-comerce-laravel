<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\OrderProduct;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupon_discount=session()->get('coupon')['discount'];
        $new_total=(Cart::subtotal() - $coupon_discount);
        return view('checkout',compact('coupon_discount','new_total'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Test si la quantite est en stock encoure ou pas
        if($this->productsNoLongerAvailable()){
            return back()->withErrors("Sorry ! One of the items in your cart in so longer available");
        }
       

        //insertion dans la table Order
        $order=Order::create([
            'user_id'=>auth()->user()->id,
            'billing_name' => $request->name,
            'billing_email' => $request->email,
            'billing_address' => $request->address,
            'billing_city' => $request->city,
            'billing_phone' => $request->phone,
            'billing_postalCode' => $request->postalCode,
            'billing_total' => $request->totalPrice,
            'error' => null,
        ]);
        

        //insertion dans la table order_products : (les produits de ce demande)
        foreach(Cart::content() as $item){
            OrderProduct::create([
                'order_id'=>$order->id, // c'est le id de l'order en haut, order actuel
                'product_id'=>$item->model->id,
                'quantity'=>$item->qty,
            ]);
        }

        //on doit supprimer la quantité selectioné du stock de produit : 
        $this->descrease_Stock_After_Validation();

        //on supprime le panier maintenant :
        Cart::instance('default')->destroy();
        session()->forget('coupon');

        return view('thank_you');
    }

    protected function descrease_Stock_After_Validation(){
        foreach(Cart::content() as $item){
            $product=Product::find($item->model->id);
            $product->update(['stock'=> $product->stock -$item->qty]);
        }
    }
    
    protected function productsNoLongerAvailable(){
        foreach(Cart::content() as $item){
            $OrderProduct=Product::find($item->model->id);
            if($item->qty>$OrderProduct->stock){
                return true;
            }
            return false;
        }
    }
}
