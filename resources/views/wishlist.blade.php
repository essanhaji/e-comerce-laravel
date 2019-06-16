@extends('layouts.master')

@section('content')

<div class="page-content">
    <!-- Start breadcume area -->
    <div class="breadcume-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <a title="Return to Home" href="index.html" class="home"><i class="fa fa-home"></i></a>
                        <span class="hidden-xs navigation-pipe">&gt;</span>
                        Wishlist 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcume area -->
    <!-- Start shop area -->
    <div class="shop-area">
        <div class="container">
            <div class="row">
                
                <!-- Start categori content -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="wishlista-details">
                   
                            <div id="list" class="tab-pane active categori-list-view row">
                                    <!-- Parcour des produits (List) -->
                                    @forelse (Cart::instance('save')->content() as $product)
                                    
                                    <div class="col-sm-12">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="{{ route('shop.show-Product',$product->id) }}">
                                                    <img src="{{asset('storage/'.$product->model->picture1)}}" alt="">
                                                </a>
                                            </div>
                                            <div class="featured-info">
                                            <a href="{{ route('shop.show-Product',$product->id) }}">{{$product->name}}</a>
                                                <p class="reating">
                                                    <span class="rate">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </p>
                                                <p class="product-text">{{$product->details}}</p>
                                                <span class="price">${{$product->price}}</span>
                                                <div class="featured-button">
                                                    
                                                    {{-- botton de ajouter a panier --}}
                                                    <form action="{{ route('cart.store')}}" method="POST" id="addTOcartForm{{$product->id}}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id" value="{{$product->model->id}}" >
                                                        <input type="hidden" name="name" value="{{$product->name}}" >
                                                        <input type="hidden" name="price" value="{{$product->price}}" >
                        
                                                        <a class="add-to-card" onclick="document.getElementById('addTOcartForm{{$product->id}}').submit();" style="cursor:pointer">
                                                            <i class="fa fa-shopping-cart">
                                                            </i>Add to cart
                                                        </a>
                                                    </form> 

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End  de parcour -->
                                    @empty 
                                        <div class="no_items">no items found</div>
                                    @endforelse
                                    
                                    {{-- on utilise appends pour ne perdre pas le lien par exemple si on fait sort ou choisi une categorie --}}
                        </div>
                    <p class="wishlist-back">
                        <a href="#"><i class="fa fa-angle-left"></i>Back to your account</a> <a href="#"><i class="fa fa-angle-left"></i>Home</a>
                    </p>
                    </div>
                </div>
                <!-- Start categori content -->
            </div>
        </div>
    </div>
    <!-- End shop area -->
</div>

@endsection