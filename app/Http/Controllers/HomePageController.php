<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
 
    public function index()
    {

        $last_products=Product::orderBy('id', 'DESC')->take(6)->get();
        $some_products=Product::inRandomOrder()->take(12)->get();
        $categories=Category::all();

        return view('index',compact('last_products','some_products','categories'));
    }

}
