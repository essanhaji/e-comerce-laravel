@extends('layouts.master')

@section('content')

            <!-- Start page content -->
                <div class="page-content">
                    <!-- Start breadcume area -->
                    <div class="breadcume-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="breadcrumb">
                                        <a title="Return to Home" href="index.html" class="home"><i class="fa fa-home"></i></a>
                                        <span class="navigation-pipe">&gt;</span>
                                        Single Blog
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End breadcume area -->
                    <div class="blog-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-4 col-md-4 pull-right">
                                    <div class="bolg-side-bar">
                                        <h3>Other posts</h3>
                                        <div class="section-offset">
                                            <ul class="list-of-entries">
                                                @foreach ($other_posts as $post)
                                                <li>     
                                                    <div class="entry">
                                                        <a class="entry-thumb" href="{{ route('blog.show-Post',$post->id) }}">
                                                            <img alt="" src="{{asset('storage/'.$post->topic_picture)}}" width="100">
                                                        </a>
                                                        <div class="wrapper">
                                                            <h6 class="entry-title"><a href="{{ route('blog.show-Post',$post->id) }}">{{$post->title}}</a></h6>
                                                            <div class="entry-meta">
                                                                <span><i class="fa fa-calendar"></i> {{$post->created_at}}</span>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                @endforeach

                                            </ul>
                                        </div>
                                      
                                    </div>
                                </div>
                                <!-- Start blog post -->
                                <div class="col-xs-12 col-sm-8 col-md-8">
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
                                                            <a class="fancybox" href="{{asset('storage/'.$post->topic_picture)}}">
                                                                <i class="fa fa-search" data-fancybox-group="gallery"></i></a> 
                                                            <a href="#"><i class="fa fa-link"></i></a>
                                                        </div>
                                                    </div>
                                                </div>                 
                                                <div class="entry-content-other">
                                                    <h3>{{$post->title}}</h3>
                                                    <p><a href="#"><i class="fa fa-user"></i> Admin</a></p>
                                                    <div class="summary">
                                                        <p>{!! $post->topic !!}</p>
                                                    </div> 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End blog post -->
                                 
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End page content -->    
                
                    
                <!-- Start blog area -->
                <div class="blog-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="area-title">
                                    <h3>The Blog</h3>
                                </div>
                            </div>
                            <div class="blog-box featured-product-area">
                                
                                @foreach ($other_posts as $post)
                                    
                                <div class="col-sm-4">
                                    <a href="{{ route('blog.show-Post',$post->id) }}"><img src="{{asset('storage/'.$post->topic_picture)}}" alt=""></a>
                                    <span class="blog-date">{{$post->created_at}}</span>
                                    <div class="blog-info">
                                        <h3><a href="{{ route('blog.show-Post',$post->id) }}">{{$post->title}}</a></h3>
                                        <p>{!! str_limit($post->topic ,300) !!}...</p>
                                        <a href="{{ route('blog.show-Post',$post->id) }}" class="readmore">Read more<i class="fa fa-arrow-right"></i></a>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End blog area -->

@endsection