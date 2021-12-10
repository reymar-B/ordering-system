<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class CouponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coupons')->insert([
            0 => [
                'code' => 'GO2018',
                'name' => 'Test Coupon',
                'percent'=> 10
            ],
            1 => [
                'code' => 'GO2020',
                'name' => 'Test Coupon02',
                'percent'=> 15
            ]
        ]);

    }
}
