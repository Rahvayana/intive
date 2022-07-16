<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('finishes')->insert([
            [
                'id' => 1,
                'code' => '3012201',
                'name' => 'Kursi Makan',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Buah',
                'price' => 250000,
                'wip_id'=>1
            ],

            [
                'id' => 2,
                'code' => '3012201',
                'name' => 'Kursi Rehat',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Buah',
                'price' => 200000,
                'wip_id'=>1
            ],

            [
                'id' => 3,
                'code' => '3012202',
                'name' => 'Kerudung Merah',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Lusin',
                'price' => 160000,
                'wip_id'=>3
            ],

            [
                'id' => 4,
                'code' => '3012203',
                'name' => 'Gaun Hijau',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Buah',
                'price' => 360000,
                'wip_id'=>4
            ],
            [
                'id' => 8,
                'code' => '3012207',
                'name' => 'Baju Warna Warni',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Lusin',
                'price' => 360000,
                'wip_id'=>4
            ],
            [
                'id' => 9,
                'code' => '3012207',
                'name' => 'Baju Warna Warni',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Lusin',
                'price' => 360000,
                'wip_id'=>5
            ],

            [
                'id' => 5,
                'code' => '3012204',
                'name' => 'Baju Biru SMP',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Lusin',
                'price' => 600000,
                'wip_id'=>5
            ],

            [
                'id' => 6,
                'code' => '3012205',
                'name' => 'Jelly Siap Makan',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'KG',
                'price' => 6000,
                'wip_id'=>7
            ],

            [
                'id' => 7,
                'code' => '3012206',
                'name' => 'Ban Motor',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Buah',
                'price' => 60000,
                'wip_id'=>6
            ],
            
        ]);
    }
}
