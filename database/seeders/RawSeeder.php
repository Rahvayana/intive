<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RawSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('raws')->insert([
            [
                'id' => 1,
                'code' => '1012201',
                'name' => 'Benang',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Buah',
                'price' => 5000,
            ],
            [
                'id' => 2,
                'code' => '1012202',
                'name' => 'Kayu',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Buah',
                'price' => 100000,
            ],
            [
                'id' => 3,
                'code' => '1012203',
                'name' => 'Rotan',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Buah',
                'price' => 30000,
            ],
            [
                'id' => 4,
                'code' => '1012204',
                'name' => 'Karet',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'KG',
                'price' => 15000,
            ],
            [
                'id' => 5,
                'code' => '1012205',
                'name' => 'Rumput Laut',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'KG',
                'price' => 2000,
            ],
        ]);
    }
}
