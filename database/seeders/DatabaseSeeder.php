<?php

namespace Database\Seeders;

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
         \App\Models\User::factory(1000)->create();
         \App\Models\Product::factory(1000)->create();
         \App\Models\Order::factory(1000)->create();
    }
}
