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
        \App\Models\User::factory(10)->create();
        $this->call([
            RawSeeder::class,
            WipSeeder::class,
            FinishSeeder::class,
            AdminSeeder::class,
            RoleSeeder::class,
            StockSeeder::class,
        ]);
    }
}
