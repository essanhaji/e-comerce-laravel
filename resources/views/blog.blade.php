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
                        <span class="navigation-pipe">&gt;</span>
                        Blog
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcume area -->
    <div class="blog-area">
        <div class="container">
            <div class="row">

                @forelse ($posts as $post)
                    
                <!-- Start blog post -->
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="blog-post2">
                        <div class="blog-box2">
                            <div class="entry-date">
                                <div class="day"> {{$post->created_at->format('d')}}</div>
                                <div class="month"> {{$post->created_at->format('M')}}</div>
                            </div>  
                            <div class="entry-main-content">
                                <div class="entry-thumbnail">
                                    <img alt="" src="{{asset('storage/'.$post->topic_picture)}}">
                                    <div class="block_hover">
                                        <div class="blog-link">
                                            <a class="fancybox" href="{{asset('storage/'.$post->topic_picture)}}"><i class="fa fa-search" data-fancybox-group="gallery"></i></a> 
                                            <a href="{{ route('blog.show-Post',$post->id) }}"><i class="fa fa-link"></i></a>
                                        </div>
                                    </div>
                                </div>                 
                                <div class="entry-content-other">
                                    <h3><a href="{{ route('blog.show-Post',$post->id) }}">{{$post->title}}</a></h3>
                                    <p>
                                        <a href="{{ route('blog.show-Post',$post->id) }}"><i class="fa fa-user"></i> Admin</a>
                                        <a href="#"><i class="fa fa-calendar"></i>  {{$post->created_at	}}</a>
                                    </p>
                                    <div class="summary">
                                        <p>Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Donec sit amet eros. Lorem ipsum dolor sit amet, consecvtetuer adipiscing elit. Mauris fermentum dictum magna. Sed laoreet aliquam leo. Ut tellus dolor, dapibus eget, elementum vel, cursus eleifend, elit. Aenean auctor wisi et urna. Aliquam erat volutpat. Duis ac turpis. Integer rutrum ante eu lacus. Vestibulum libero nisl, porta vel, scelerisque eget, malesuada at, neque</p>    
                                        <a href="{{ route('blog.show-Post',$post->id) }}" class="read-more-link">Read More</a> 
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End blog post -->

                @empty
                <div class="no_items">No items found</div>
                @endforelse

                <!-- Start blog pagination -->
                <div class="pagination-posts mb-5" style="float:right">{{$posts->appends(request()->input())->links()}}</div>

            </div>
        </div>
    </div>
</div>


        <div class="container">
            <div class="row">
                <div class="col-sm-12">
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
    <!-- End brand and client -->

@endsection