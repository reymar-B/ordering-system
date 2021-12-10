<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MenuCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_categories')->insert( [
            0 => [
                'id' => 1,
                'category_name' => 'Burgers'
            ],
            1 => [
                'id' => 2,
                'category_name' => 'Beverages'
            ],
            2 => [
                'id' => 3,
                'category_name' => 'Combo Meal'
            ]

        ] );

    }
}
