<?php

use Illuminate\Database\Seeder;
use App\Product;
use Carbon\Carbon;


class ProductsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now=Carbon::now()->toDateString();
        for($i=1;$i<5;$i++){
            Product::create([
                'name'=>'Laptop '.$i,
                'details'=>'det :Fashion has been creating well-designed collections since 2010.',
                'stock'=>20,
                'brand'=>'Dell',
                'price'=>200.99*$i,
                'description'=>'desc :Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a womans wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion  to a range of accessories including shoes, hats, belts and more!            ',
                'picture1'=>'products\May2019\yfnm8Gag1oqqiMQ3fHyN.jpg',
                'picture2'=>'',
                'picture3'=>'',
                'created_at'=>$now,
                'updated_at'=>$now,
            ])->categories()->attach(1);
        }
       

        for($i=1;$i<5;$i++){

            Product::create([
                'name'=>'Phone '.$i,
                'details'=>'det :Fashion has been creating well-designed collections since 2010.',
                'stock'=>20,
                'brand'=>'Dell',
                'price'=>20.99*$i,
                'description'=>'desc :Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a womans wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion  to a range of accessories including shoes, hats, belts and more!            ',
                'picture1'=>'',
                'picture2'=>'',
                'picture3'=>'',
                'created_at'=>$now,
                'updated_at'=>$now,
            ])->categories()->attach(2);
        }

        for($i=1;$i<3;$i++){

            Product::create([
                'name'=>'earphone '.$i,
                'details'=>'det :Fashion has been creating well-designed collections since 2010.',
                'stock'=>20,
                'brand'=>'Dell',
                'price'=>20.99,
                'description'=>'desc :Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a womans wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion  to a range of accessories including shoes, hats, belts and more!            ',
                'picture1'=>'',
                'picture2'=>'',
                'picture3'=>'',
                'created_at'=>$now,
                'updated_at'=>$now,
            ])->categories()->attach(8);
        }

        for($i=1;$i<3;$i++){

            Product::create([
                'name'=>'TV samsung'.$i,
                'details'=>'det :Fashion has been creating well-designed collections since 2010.',
                'stock'=>20,
                'brand'=>'Dell',
                'price'=>20.99,
                'description'=>'desc :Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every item is a vital part of a womans wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention. Now Fashion  to a range of accessories including shoes, hats, belts and more!            ',
                'picture1'=>'',
                'picture2'=>'',
                'picture3'=>'',
                'created_at'=>$now,
                'updated_at'=>$now,
            ])->categories()->attach(3);
        }
    }
}
