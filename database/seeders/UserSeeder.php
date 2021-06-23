<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
            [
                'name' => 'stef meulmeester',
                'email' => 'meul0086@hz.nl',
                'password' => '$2y$10$Tg9ZMPdBbIhNhwlP7N4p2eBRu3PYjTP.qOXz85aefUtxeopsBXrXG',
                'email_verified_at' => '2021-06-01 06:11:11'
            ]
        ]);
    }
}
