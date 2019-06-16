@extends('layouts.master')

@section('content')


<div class="page-content">
        {{-- On fait une test c'est il y a une message de success si on ajoute produit au panier ou message d'errore --}}
        @if(session()->has('success_message'))   
            <div class="container">    
                <div class="alert alert-success  mt-5">
                    <i class="fa fa-check"></i>
                    {{session()->get('success_message')}}
                </div>
            </div>
        @endif

        @if(count($errors)>0)
             <div class="container">    
                <div class="alert alert-danger  mt-5">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <div>{{ $error }}</div>
                        @endforeach 

                    </ul>
                </div>
             </div>
        @endif



        {{-- test si il y a des produits dans le panier ou pas --}}
        @if(Cart::count()>0)
       
        <!-- Start breadcume area -->
        <div class="breadcume-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb">
                            <a title="Return to Home" href="index.html" class="home"><i class="fa fa-home"></i></a>
                            <span class="navigation-pipe">&gt;</span>
                            <a title="Automotive & Motorcycle" href="index.html">My account</a>
                            <span class="navigation-pipe">&gt;</span>
                            Shopping cart 
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End breadcume area -->
        <div class="cart-page-content">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <h4 class="cart-title">Shopping cart</h4>
                        <div class="table-responsive">
                            <table class="cart-table">
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Product name</th>
                                        <th>Unit Price</th>
                                        <th>Qty</th>
                                        <th>Subtotal</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach (Cart::content() as $item)
                                    
                                    <tr>
                                        <td>
                                            <a href="{{ route('shop.show-Product',$item->model->id) }}"><img alt="" class="img-responsive" src="{{asset('storage/'.$item->model->picture1)}}"></a>
                                        </td>
                                        <td width="200">
                                          <center><h5><a href="single-product.html">{{$item->name}}</a></h5></center>
                                        </td>
                                        <td>
                                            <div class="cart-price">${{$item->price}}</div>
                                        </td>
                                        <td width="350">
                                            <form action="{{route('cart.updateQte',$item->rowId)}}" method="POST">
                                                @method('PATCH')
                                                @csrf
                                                {{-- <input name="name" type="hidden" value="{{$item->name}}" > --}}
                                                <input name="name" type="hidden" value="{{$item->name}}" >
                                                <input name="quantity" type="number" value="{{$item->qty}}" style="float:left;margin:5px 5px 0 0">
                                                <button type="submit" class="btn" style="float:left"> 
                                                    <i class="fa fa-pencil"></i>
                                                </button>
                                            </form>
                                        </td>
                                        <td>
                                            <div class="cart-subtotal">${{$item->price*$item->qty}}</div>
                                        </td>
                                        <td >
                                            {{-- pour suppression on doit envoyer l'id de produit DANS LA CART, n'est pas l'id de produit dans la table --}}
                                            <form action="{{route('cart.removeItem',$item->rowId)}}" method="POST">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>


                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                   {{-- Barre des coupons --}}
                    <div class="col-xs-8 col-sm-8 col-md-8">
                        <div class="cart-discount-code-area">
                            <h2>Discount codes</h2>
                            <p>Enter your coupon code if you have one.</p>
                            <form action="{{route('coupon.store')}}" method="POST">
                                {{ csrf_field() }}
                                <input type="text" name="coupon_code">
                                @if(!session()->has('coupon'))
                                <button type="submit" class="btn">Apply coupon</button>                                    
                                @else
                                <button disabled type="submit" class="btn">Apply coupon</button>                                    
                                @endif
                            </form>
                        </div>
                    </div>

                    {{-- Barre de prix et checkout --}}
                    <div class="col-xs-4 col-sm-4 col-md-4">
                            <div class="cart-discount-code-area">
                                <h2>CheckOut</h2>
                                  @if(!session()->has('coupon')) {{-- si il y a un coupon (qui est ajouter par couponcontroller) alors : --}}
                                    <h4>Totale : <b><span style="color:red">$ {{Cart::Subtotal()}}</span></b></h4>
                                  @else
                                    <h4>Total : <b><span style="text-decoration: line-through">$ {{Cart::Subtotal()}}</span></b></h4>
                                    <h4>Discount : <b><span> - $ {{$coupon_discount}}</span></b></h4>
                                    <h4>New Total : <b><span style="color: red">$ {{$new_total}}</span></b></h4>
                                    {{-- pour supprimer coupon : --}}
                                    <form action="{{route('coupon.destroy')}}" method="POST" id="FormRemoveCoupon">
                                        {{csrf_field () }}
                                        @method('delete')
                                        <p onclick="document.getElementById('FormRemoveCoupon').submit();" style="cursor:pointer">Remove Coupon</p>
                                    </form>
                                  @endif
                                    <a href="{{ route('checkout.index')}}">Apply Now </a>
                            </div>
                        </div>
                </div>
               

                <center class="mb-5 mt-5"><a type="button" class="btn btn-info" href="{{route('shop.index')}}">Browse products</a></center>

            </div>
        </div> 
       
        @else 

        <div class="container">
            <img src="img/shop/no_items_cart.png" class="mt-5">
             <center class="mb-5 mt-5"><a type="button" class="btn btn-info" href="{{route('shop.index')}}">Browse products</a></center>
        </div>

        @endif
    </div>

@endsection