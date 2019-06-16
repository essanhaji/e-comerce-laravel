<?php

use Illuminate\Database\Seeder;
use App\Category;
use Carbon\Carbon;

class CategoryTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now=Carbon::now()->toDateTimeString();

        Category::insert([
            ['title'=>'laptops','created_at'=>$now,'updated_at'=>$now],
            ['title'=>'Phones','created_at'=>$now,'updated_at'=>$now],
            ['title'=>'TVs','created_at'=>$now,'updated_at'=>$now],
            ['title'=>'Camers','created_at'=>$now,'updated_at'=>$now],
            ['title'=>'Video Games','created_at'=>$now,'updated_at'=>$now],
            ['title'=>'Vehicles','created_at'=>$now,'updated_at'=>$now],
            ['title'=>'Toys','created_at'=>$now,'updated_at'=>$now],
            ['title'=>'Accessoires','created_at'=>$now,'updated_at'=>$now],
        ]);
    }
}
