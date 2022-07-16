<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'id'=>1,
                'name'=>'SuperAdmin',
                'role_id'=>1,
                'email'=>'superadmin@gmail.com',
                'password'=>Hash::make('admin123'),
            ],
            [
                'id'=>2,
                'name'=>'Admin',
                'role_id'=>2,
                'email'=>'admin@gmail.com',
                'password'=>Hash::make('admin123'),
            ],
            
        ]);
    }
}
