<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            0 => [
                'name' => 'users',
                'email' => 'users@users.com',
                'email_verified_at' => now(),
                'password' => bcrypt('12345678'), // password
                'remember_token' => Str::random(10)
            ],
        ]);
    }
}
