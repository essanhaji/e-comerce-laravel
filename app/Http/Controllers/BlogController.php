<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Blog::where('status',1)->paginate(6);

        return view('blog',compact('posts'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post=Blog::where('id',$id)->firstOrFail();
        $other_posts=Blog::inRandomOrder()->take(6)->get();
        return view('blog_post_details',compact('post','other_posts'));
    }


}
