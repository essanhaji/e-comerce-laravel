@extends('layouts.master')

@section('content')
 
<div class="page-content">
        <!-- Start breadcume area -->
        <div class="breadcume-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="breadcrumb">
                            <a title="Return to Home" href="/" class="home"><i class="fa fa-home"></i></a>
                            <span class="navigation-pipe">&gt;</span>
                             Shop
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
                    <!-- Start shop categori area -->
                    <div class="col-xs-12 col-sm-4 col-md-3">
                        <div class="shop-categori-area">
                            <div class="sidebar-menu-title">
                                <h2><i class="fa fa-th-list"></i>Catalog</h2>
                            </div>
                            <div class="shop-categori">
                                <div class="shop-categori-inner">
                                    <!-- Start Categori -->
                                    <div class="categoris categori-border">
                                        <span class="cat-title">Categories</span>
                                        <ul>
                                            {{-- parcour des categories de bd --}}
                                            @foreach ($categories as $category)
                                            <li>
                                                    <span><input type="radio" {{ request()->category == $category->title ? 'checked' : '' }}/></span>
                                                    <label>
                                                        <a href="{{ route('shop.index',['category'=>$category->title]) }}">{{$category->title}}</a>
                                                    </label>
                                                </li>  
                                            @endforeach

                                        </ul>
                                    </div>
                                    <!-- End Categori -->
                                   
                                    <!-- Start Categori -->
                                    <div class="categoris categori-border">
                                        <span class="cat-title">Condition</span>
                                        <ul>
                                            <li>
                                                <span><input type="checkbox" class="checkbox"></span>
                                                <label>
                                                  <a href="{{ route('shop.index',['category'=>request()->category,'condition'=>'new']) }}">New</a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End Categori -->
                                  
                                    <!-- Start Categori -->
                                    <div class="categoris categori-border">
                                        <span class="cat-title">Price</span>
                                        <ul>
                                            <li class="price-range ml-5">
                                                  <div id="range row">
                                                        <a href="{{ route('shop.index',['category'=>request()->category,'price'=>'0_100']) }}">0$ - 100$</a>
                                                        <a href="{{ route('shop.index',['category'=>request()->category,'price'=>'100_300']) }}">100$-300$</a>
                                                        <a href="{{ route('shop.index',['category'=>request()->category,'price'=>'300_500']) }}">300$-500$</a>
                                                        <a href="{{ route('shop.index',['category'=>request()->category,'price'=>'_500']) }}">+ 500$</a>
                                                    </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- End search Categori -->
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End search area -->
                    <!-- Start categori content -->
                    <div class="col-xs-12 col-sm-8 col-md-9">
                        <div id="content-shop" class="categori-content">
                            <div class="categori-baner">
                                <img src="{{asset('img/shop/sports-outdoors1.jpg')}}" alt="">
                            </div>
                            <h1 class="page-heading product-listing"><span class="cat-name">{{ $categoryName }} products</span><span class="heading-counter">Total :There are {{$nbr_Products}} products.</span>
                            </h1>
                            <!-- Start catagori short -->
                            <div class="catagori-short">
                                <ul id="gridlist" class="nav nav-tabs" data-tabs="tabs">
                                    <li><a href="#grid" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
                                    <li class="active"><a href="#list" data-toggle="tab"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                                <div class="chose-box" style="float:right">
                                    <p class="selector1 hidden-xs" >
                                        {{-- sort by : --}}
                                        <strong>Price :</strong>
                                        <a href="{{ route('shop.index',['category'=>request()->category,'sort'=>'low_hight']) }}">low to high </a> |
                                        <a href="{{ route('shop.index',['category'=>request()->category,'sort'=>'hight_low']) }}">hight to low</a>
                                    </p>
                                  
                                </div>
                            </div>
                            <!-- End catagori short -->


                             <div id="my-tab-content" class="tab-content">

                                <!-- Start parcour des  produits (Grid) -->
                                <div id="grid" class="tab-pane categoti-grid-view row">
                                    @forelse ($products as $product)

                                    <div class="col-xs-12 col-sm-6 col-md-4">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="{{ route('shop.show-Product',$product->id) }}">
                                                    <img src="{{asset('storage/'.$product->picture1)}}" >
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
                                                <span class="price">${{$product->price}}</span>
                                                <div class="featured-button">
                                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                                     {{-- botton de ajouter a panier --}}
                                                    @if($product->stock>0)
                                                     <form action="{{ route('cart.store')}}" method="POST" id="addTOcartForm{{$product->id}}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id" value="{{$product->id}}" >
                                                        <input type="hidden" name="name" value="{{$product->name}}" >
                                                        <input type="hidden" name="price" value="{{$product->price}}" >
                        
                                                        
                                                        <a class="add-to-card" onclick="document.getElementById('addTOcartForm{{$product->id}}').submit();" style="cursor:pointer">
                                                            <i class="fa fa-shopping-cart">
                                                            </i>Add to cart
                                                        </a>
                                                     </form>
                                                    @endif  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                        <div class="no_items">No items found</div>
                                    @endforelse
                                    <!-- end parcour des  produits (Grid) -->

                                    <div class="pagination-products">{{$products->appends(request()->input())->links()}}</div>
                                </div>
                                <!-- End grid view -->


                                <div id="list" class="tab-pane active categori-list-view row">
                                    <!-- Parcour des produits (List) -->
                                    @forelse ($products as $product)
                                    
                                    <div class="col-sm-12">
                                        <div class="featured-inner">
                                            <div class="featured-image">
                                                <a href="{{ route('shop.show-Product',$product->id) }}">
                                                    <img src="{{asset('storage/'.$product->picture1)}}" alt="">
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
                                                    <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                                    
                                                    {{-- botton de ajouter a panier --}}
                                                    <form action="{{ route('cart.store')}}" method="POST" id="addTOcartForm{{$product->id}}">
                                                        {{ csrf_field() }}
                                                        <input type="hidden" name="id" value="{{$product->id}}" >
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
                                    <div class="pagination-products">{{$products->appends(request()->input())->links()}}</div>
                        </div>
                    </div>
                    <!-- Start categori content -->
                </div>
            </div>
        </div>
        <!-- End shop area -->
    </div>

@endsection