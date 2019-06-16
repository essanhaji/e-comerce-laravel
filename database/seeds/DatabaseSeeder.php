<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryTableSeed::class);
        $this->call(ProductsTableSeed::class);
        $this->call(CouponTableSeed::class);
    }
}
