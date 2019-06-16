<?php

use App\Coupon;
use Illuminate\Database\Seeder;

class CouponTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
            'code'=>'ESS',
            'type'=>'fixed',
            'value'=>5,
        ]);

        Coupon::create([
            'code'=>'OFF',
            'type'=>'percent',
            'percent_off'=>50,
        ]);
    }
}
