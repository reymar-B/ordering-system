<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert( [
            0 => [
                'menu_category_id' => 1,
                'menu_name' => 'Hotdog',
                'price' => 50.00,
                'tax' => 5.00
            ],
            1 => [
                'menu_category_id' => 1,
                'menu_name' => 'CheeseBurger',
                'price' => 50.00,
                'tax' => 5.00
            ],
            2 => [
                'menu_category_id' => 1,
                'menu_name' => 'Fries',
                'price' => 60.00,
                'tax' => 7.00
            ],
            3 => [
                'menu_category_id' => 2,
                'menu_name' => 'Coke',
                'price' => 40.00,
                'tax' => 4.00
            ],
            4 => [
                'menu_category_id' => 2,
                'menu_name' => 'Sprite',
                'price' => 80.00,
                'tax' => 8.00
            ],
            5 => [
                'menu_category_id' => 2,
                'menu_name' => 'Tea',
                'price' => 30.00,
                'tax' => 3.00
            ],
            6 => [
                'menu_category_id' => 3,
                'menu_name' => 'Chicken Combo Meal',
                'price' => 20.00,
                'tax' => 2.00
            ],
            7 => [
                'menu_category_id' => 3,
                'menu_name' => 'Pork Combo Meal',
                'price' => 90.00,
                'tax' => 9.00
            ],
            8 => [
                'menu_category_id' => 3,
                'menu_name' => 'Fish Combo Meal',
                'price' => 60.00,
                'tax' => 6.00
            ],

        ]);

    }
}
