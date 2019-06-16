<?php

namespace App\Http\Controllers;

use App\Product;
use App\Blog;
use App\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class shopPageController extends Controller
{

    public function index()
    {
        // si il y a la selection d'un categorie
        if (request()->category) {
            $products=Product::with('categories')->whereHas('categories',function($query){
                $query->where('title',request()->category);
            });

            $categoryName=request()->category;
        }
        // sinon le cas normale all products
        else {
            $products=Product::take(12);
            $categoryName='All';
        }
                
        //si il y a une sort :
        if(request()->sort=='low_hight'){
            $products=$products->orderBy('price');
        }
        elseif(request()->sort=='hight_low'){
            $products=$products->orderBy('price','desc');
        }

        // si il est cocher un condition
        $now=Carbon::now()->toDateString();
        if(request()->condition=='new'){
            $products=$products->where('created_at',$now);
        }

        // si il est cocher l'un des prix
        if(request()->price=='0_100'){
            $products=$products->whereBetween('price',array(0, 100));
        }elseif(request()->price=='100_300'){
            $products=$products->whereBetween('price',array(100, 300));
        }elseif(request()->price=='300_500'){
            $products=$products->whereBetween('price',array(300, 500));
        }elseif(request()->price=='_500'){
            $products=$products->whereBetween('price',array(500, 10000));
        }

        //ajouter la pagination
        $products=$products->paginate(6);

        
        $categories=Category::all();
        $nbr_Products=Product::count();
        $posts=Blog::inRandomOrder()->take(6)->get();

        return view('shop',compact('products','nbr_Products','categories','categoryName','posts'));
    }

    public function show($id){
        $product=Product::where('id',$id)->firstOrFail();


        $product_categories=Category::with('products')->whereHas('products',function($query) use ($id){
            $query->where('products.id', $id);
        })->get();
       
        $related_products=Product::with('categories')->whereHas('categories',function($query) use ($product_categories){
            foreach ($product_categories as $category) {
                $query->where('title',$category->title);
            }
        })->get();

        return view('product-details',compact('product','product_categories','related_products'));
    }
}
