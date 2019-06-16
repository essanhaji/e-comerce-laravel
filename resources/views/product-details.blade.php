@extends('layouts.master')

@section('content')

<div class="page-content">

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

    <!-- Start breadcume area -->
    <div class="breadcume-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="breadcrumb">
                        <a title="Return to Home" href="/" class="home"><i class="fa fa-home"></i></a>
                        <span class="navigation-pipe">&gt;</span>
                        <span class="hidden-xs navigation-pipe">&gt;</span>
                        Product details 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcume area -->
    <!-- Start single product area -->
    <div class="container">
        <div class="row">
            <div class="single-products">
                <!-- Start single product image -->
                <div class="col-sm-5">
                    <div class="single-product-image"> 
                        <div id="content-eleyas">
                            <div id="my-tab-content" class="tab-content">
                                {{-- pic 1 --}}
                                <div class="tab-pane active" id="view1">
                                  
                                    <a class="fancybox" href="{{asset('storage/'.$product->picture1)}}"  title="">
                                        <img src="{{asset('storage/'.$product->picture1)}}" alt="">
                                        
                                    </a>
                                </div>
                                
                                {{-- pic 2  --}}
                                <div class="tab-pane" id="view2">
                                   
                                    <a class="fancybox" href="{{asset('storage/'.$product->picture2)}}" data-fancybox-group="gallery" title="">
                                        <img src="{{asset('storage/'.$product->picture2)}}" alt="">
                                        
                                    </a>
                                </div>

                                {{-- pic 3 --}}
                                <div class="tab-pane" id="view3">
                                    <a class="fancybox" href="{{asset('storage/'.$product->picture3)}}" data-fancybox-group="gallery" title="">
                                        <img src="{{asset('storage/'.$product->picture3)}}" alt="">
                                        
                                    </a>
                                </div>
                             
                            </div>
                            <div id="viewproduct" class="nav nav-tabs product-view" data-tabs="tabs">
                                <div class="pro-view active"><a href="#view1" data-toggle="tab"><img src="{{asset('storage/'.$product->picture1)}}" alt=""></a></div>
                                <div class="pro-view"><a href="#view2" data-toggle="tab"><img src="{{asset('storage/'.$product->picture2)}}" alt=""></a></div>
                                <div class="pro-view"><a href="#view3" data-toggle="tab"><img src="{{asset('storage/'.$product->picture3)}}" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End single product image -->
                <!-- Start single product details -->
                <div class="col-sm-7">
                    <div class="single-product-details">
                    <h1>{{$product->name}}</h1>
                        <div class="sin-social">
                            <p>
                                <a class="btn btn-default twitter" href="#"><i class="fa fa-twitter"></i>Tweet</a>
                                <a class="btn btn-default facebook" href="#"><i class="fa fa-facebook"></i>Share</a>
                                <a class="btn btn-default google-plus" href="#"><i class="fa fa-google-plus"></i>Google+</a>
                                <a class="btn btn-default pinterest" href="#"><i class="fa fa-pinterest"></i>Pinterest</a>
                            </p>
                        </div>
                        <p class="rating-and-review">
                            <span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span>
                        </p>
                        <h2><span>$ {{$product->price}}</span></h2>
                        <p><strong>Brand:</strong> {{$product->brand}} </p>
                        <p><strong>Added :</strong>  {{$product->created_at	}} </p>
                        <p> {{$product->details}} </p>
                        <p class="sin-item"><span class="sin-item-text"> {{$product->stock}}  Items </span><span class="sin-item-btn">In stock</span></p>
                        {{-- <form method="post" action="#">
                            <div class="numbers-row">
                                <label>Quantity</label>
                               <input type="number" name="french-hens" id="french-hens" value="1">
                            </div>
                        </form>
                        <p class="selector1">
                            <label>Size</label>
                            <select id="selectProductSort1" class="selectProductSort form-control">
                                <option value="position:asc" selected="selected">S</option>
                                <option value="price:asc">M</option>
                                <option value="price:desc">L</option>
                            </select>
                        </p>
                        <p class="selector1">
                                <label>Color</label>
                                <select id="selectProductSort1" class="selectProductSort form-control">
                                    <option value="position:asc" selected="selected">Black</option>
                                    <option value="price:asc">Red</option>
                                    <option value="price:desc">White</option>
                                </select>
                            </p> --}}
                        <p class="buttons_bottom_block no-print" id="add_to_cart">
                            {{-- Si on ajoute un produit a le panier, on doit prendre les info de ce produit pour les envoyer au page de panier --}}
                            <form action="{{ route('cart.store')}}" method="POST" id="addTOcartForm{{$product->id}}">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$product->id}}" >
                                <input type="hidden" name="name" value="{{$product->name}}" >
                                <input type="hidden" name="price" value="{{$product->price}}" >

                                <button class="exclusive" name="Submit" type="submit">
                                    <span>Add to cart</span>
                                </button>
                            </form>  
                        </p>

    
                        <p class="sin-adto-cart-bottom">
                            <form action="{{ route('wishlist.store')}}" method="POST" id="wishlistFormtForm">
                                {{ csrf_field() }}
                                <input type="hidden" name="id" value="{{$product->id}}" >
                                <input type="hidden" name="name" value="{{$product->name}}" >
                                <input type="hidden" name="price" value="{{$product->price}}" >
                                
                                <a onclick="document.getElementById('wishlistFormtForm').submit()" style="cursor:pointer"><i class="fa fa-heart"></i>Add to wishlist</a>
                            </form>  
                        </p>
                    </div>
                </div>
                <!-- End single product details -->
            </div>
        </div>
    </div>
    <!-- End single product area -->
    <!-- Start single product info -->
    <div class="container">
        <div class="row">
            <div class="single-product-info">
                <div id="content-product-review">
                    <div class="col-xs-12 col-sm-3">
                        <ul id="tabs" class="review-tab" data-tabs="tabs">
                            <li class="active"><a href="#info1" data-toggle="tab">More info</a></li>
                            <li><a href="#info2" data-toggle="tab">Data sheet</a></li>
                            <li><a href="#info3" data-toggle="tab">Images</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-9">
                        <div id="my-tab-content-2" class="tab-content">
                            <div class="tab-pane active" id="info1">
                                <p class="tab-info-one">{!! $product->description !!}</p> <!-- !! peur pas afficher les tag HTML-->
                            </div>
                            <div class="tab-pane" id="info2">
                                <table class="table-data-sheet">            
                                    <tbody>
                                        <tr class="odd">
                                            <td>Brand</td>
                                            <td>{{$product->brand}}</td>
                                        </tr>
                                        <tr class="even">
                                            <td>Price</td>
                                            <td>${{$product->price}}</td>
                                        </tr>
                                        <tr class="odd">
                                            <td>Details</td>
                                            <td>{{$product->details}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane" id="info3">
                                <div class="tab-info-product">
                                        
                                   
                                    <!-- Start featured item -->
                                        <img src="{{asset('storage/'.$product->picture1)}}" alt="" width="150">
                                        <img src="{{asset('storage/'.$product->picture2)}}" alt="" width="150">
                                        <img src="{{asset('storage/'.$product->picture3)}}" alt="" width="150">
                                       
                                    <!-- End featured item -->

                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End single product info -->
    <!-- Start featured product -->
    <div class="featured-product-area">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="area-title">
                        <h3>other products in the same category: </h3>
                    </div>
                </div>
                <div class="featured-product">
                    <div class="featured-item">
                        @foreach ($related_products as $product)

                        <!-- Start featured item -->
                        <div class="col-sm-3 mb-5">
                            <div class="featured-inner">
                                <div class="featured-image">
                                    <a href="single-product.html">
                                        <img src="{{asset('storage/'.$product->picture1)}}" alt="">
                                    </a>
                                </div>
                                <div class="featured-info">
                                <a href="single-product.html">{{$product->name}}</a>
                                    <p class="reating">
                                        <span class="rate">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </span>
                                    </p>
                                    <span class="price">${{$product->price}}</span>
                                    <div class="featured-button">
                                        <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                        <form action="{{ route('cart.store')}}" method="POST" id="addTOcartForm">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="id" value="{{$product->id}}" >
                                            <input type="hidden" name="name" value="{{$product->name}}" >
                                            <input type="hidden" name="price" value="{{$product->price}}" >
            
                                            
                                            <a class="add-to-card" onclick="document.getElementById('addTOcartForm').submit();" style="cursor:pointer">
                                                <i class="fa fa-shopping-cart">
                                                </i>Add to cart
                                            </a>
                                        </form> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End featured item -->
                        
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End featured product -->
</div>
      

@endsection