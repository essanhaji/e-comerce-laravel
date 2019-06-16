@extends('layouts.master')

@section('content')

    
            <!-- Start slider area -->
            <div class="slider-area">
                <div id="slider" class="nivoSlider">
                    <img style ="display:none" src="img/slider/1.jpg"  data-thumb="img/slider/1.jpg"  alt="" title="#htmlcaption1"/>      
                    <img style ="display:none" src="img/slider/2.jpg"  data-thumb="img/slider/2.jpg"  alt="" title="#htmlcaption2"/>
                </div>
                <div id="htmlcaption1" class="pos-slideshow-caption nivo-html-caption nivo-caption">
                    <div class="timing-bar"></div>
                    <div class="pos-slideshow-info pos-slideshow-info1">
                        <div class="container">
                            <div class="pos_description hidden-xs hidden-sm">
                                <div class="title1"><span class="txt">Camera Digital</span></div>
                                <div class="title2"><span class="txt">Brand D5500</span></div>
                                <div class="pos-slideshow-readmore">
                                    <a href="http://bootexperts.com/" title="Shop now">Shop now</a>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="htmlcaption2" class="pos-slideshow-caption nivo-html-caption nivo-caption">
                    <div class="timing-bar"></div>
                    <div class="pos-slideshow-info pos-slideshow-info2">
                        <div class="container">
                            <div class="pos_description hidden-xs hidden-sm">
                                <div class="title1"><span class="txt">Tivi Brand Name</span></div>
                                <div class="title2"><span class="txt">48" Full HD Flat TV</span></div>
                                <div class="pos-slideshow-readmore">
                                    <a href="#" title="Shop now">Shop now</a>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End slider area -->
            <!-- Start categori area -->
            <div class="categori-area">
                <div class="container">
                    <div class="row">
                        <!-- Start categori menu -->
                        <div class="col-xs-12 col-sm-4 col-md-3">
                            <div class="categori-menu">
                                <div class="sidebar-menu-title">
                                    <h2><i class="fa fa-th-list"></i>Categories</h2>
                                </div>
                                <div class="sidebar-menu">
                                    <ul>
                                        {{-- parcour des categories de bd --}}
                                        @foreach ($categories as $category)
                                            <li>
                                                <a href="{{ route('shop.index',['category'=>$category->title]) }}" class="single-menu">
                                                    {{$category->title}}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End categori menu -->
                        <!-- Start categori banner -->
                        <div class="col-xs-12 col-sm-8 col-md-9">
                            <div class="categori-banner">
                                <div class="banner-left">
                                    <div class="banner-image">
                                        <a href="#">
                                            <img src="img/banner/cms11.jpg" alt="">
                                        </a>
                                    </div>
                                    <div class="banner-image">
                                        <a href="#">
                                            <img src="img/banner/cms12.jpg" alt="">
                                        </a>
                                    </div>
                                </div>
                                <div class="banner-right" style="float:left; margin-right:5px">
                                    <div class="banner-image">
                                        <a href="#">
                                                <img src="img/banner/cms13.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                                <div class="banner-right" style="float:left">
                                    <div class="banner-image">
                                        <a href="#">
                                                <img src="img/banner/cms13.jpg" alt="">
                                            </a>
                                    </div>
                                </div>
                               
                            </div>
                            
                        </div>
                        <!-- End categori banner -->
                     
                    </div>
                </div>
            </div>
            <!-- End categori area -->
            <!-- Start purches progress -->
            <div class="purches-progress-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="area-title">
                                <h3>Purchase progress</h3>
                            </div>
                        </div>
                        <div class="progress-area">
                            <div class="col-sm-3">
                                <div class="progrtee-box icon">
                                    <h4>step 1</h4>
                                    <p>Search your items</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="progrtee-box icon1">
                                    <h4>step 2</h4>
                                    <p>select your items</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="progrtee-box icon2">
                                    <h4>step 3</h4>
                                    <p>Purchase your items</p>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="progrtee-box icon3">
                                    <h4>step 4</h4>
                                    <p>connect your items</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End purches progress -->
            <!-- Start last products -->
            <div class="featured-product-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="area-title">
                                <h3>Last Products</h3>
                            </div>
                        </div>
                        <div class="featured-product">
                            <div class="featured-item">

                                
                                <!-- Parcour les dernier produits ajouter -->
                                @foreach ($last_products as $product)

                                <div class="col-sm-3">
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
                                            <span class="price">${{$product->price}}</span>
                                            <div class="featured-button">
                                                <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
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

                                @endforeach
                                <!-- End featured item -->
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End last products -->
            <!-- Start two banner area -->
            <div class="two-banner-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6">
                            <div class="banner-left">
                                <div class="banner-image">
                                    <a href="#">
                                        <img src="img/banner/cms14.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="banner-right">
                                <div class="banner-image">
                                    <a href="#">
                                        <img src="img/banner/cms15.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End two banner area -->
            <!-- Start some products area -->
            <div class="best-sellar-area featured-product-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="area-title">
                                <h3>Some Products</h3>
                            </div>
                        </div>
                        <div class="featured-product">
                            <div class="featured-item">

                                @foreach ($some_products as $product)

                                <!-- Start featured item -->
                                <div class="col-xs-12 col-sm-3">
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
                                            <span class="price">${{$product->price}}</span>
                                            <div class="featured-button">
                                                <a href="wishlists.html" class="wishlist"><i class="fa fa-heart"></i></a>
                                                 
                                                <form action="{{ route('cart.store')}}" method="POST" id="addTOcartForm{{$product->id}}">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="id" value="{{$product->id}}" >
                                                    <input type="hidden" name="name" value="{{$product->name}}" >
                                                    <input type="hidden" name="price" value="{{$product->price}}" >
                    
                                                    
                                                    <a class="add-to-card" onclick="document.getElementById('addTOcartForm{{$product->id}}').submit();" style="cursor:pointer">
                                                        <i class="fa fa-shopping-cart">
                                                        </i>Add to cart
                                                    </a>
                                                </form>                                            </div>
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
            <!-- End some products area -->
           

            <!-- Start brand and client -->
            <div class="brand-and-client">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="area-title">
                                <h3>BRAND & CLIENTS</h3>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="brand-logo featured-product-area">
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/1.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/2.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/3.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/4.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/5.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/6.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/1.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/3.jpg" alt=""></a>
                                </div>
                                <div class="clients">
                                    <a href="#"><img src="img/brand-logo/4.jpg" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End brand and client -->
            <!-- Start blog area -->
            <div class="blog-area">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="area-title">
                                <h3>The Blog</h3>
                            </div>
                        </div>
                        <div class="blog-box featured-product-area">
                            <div class="col-xs-12 col-sm-4">
                                <a href="single-blog.html"><img src="img/blog/4-home-default.jpg" alt=""></a>
                                <span class="blog-date">2015-08-12 04:40:21</span>
                                <div class="blog-info">
                                    <h3><a href="single-blog.html">Share the Love for PrestaShop 1.6</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                                    <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <a href="single-blog.html"><img src="img/blog/3-home-default.jpg" alt=""></a>
                                <span class="blog-date">2015-08-12 04:40:21</span>
                                <div class="blog-info">
                                    <h3><a href="single-blog.html">Answers to your Questions about PrestaShop</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                                    <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <a href="single-blog.html"><img src="img/blog/2-home-default.jpg" alt=""></a>
                                <span class="blog-date">2015-08-12 04:40:21</span>
                                <div class="blog-info">
                                    <h3><a href="single-blog.html">What is Bootstrap? – The History and the Hype</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                                    <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4">
                                <a href="single-blog.html"><img src="img/blog/1-home-default.jpg" alt=""></a>
                                <span class="blog-date">2015-08-12 04:40:21</span>
                                <div class="blog-info">
                                    <h3><a href="single-blog.html">From Now we are certified web agency</a></h3>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been...</p>
                                    <a href="single-blog.html" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End blog area -->
                    
      

@endsection