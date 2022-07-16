<?php

namespace Database\Seeders;

use App\Models\Raw;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('wips')->insert([
            [
                'id' => 1,
                'code' => '2012201',
                'name' => 'Kursi',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Buah',
                'price' => 50000,
                'raw_id'=>2
            ],

            [
                'id' => 2,
                'code' => '2012201',
                'name' => 'Kursi',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Buah',
                'price' => 50000,
                'raw_id'=>3
            ],

            [
                'id' => 3,
                'code' => '2012202',
                'name' => 'Kain Merah',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Roll',
                'price' => 160000,
                'raw_id'=>1
            ],

            [
                'id' => 4,
                'code' => '2012203',
                'name' => 'Kain Hijau',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Roll',
                'price' => 160000,
                'raw_id'=>1
            ],

            [
                'id' => 5,
                'code' => '2012204',
                'name' => 'Kain Biru',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Roll',
                'price' => 160000,
                'raw_id'=>1
            ],

            [
                'id' => 6,
                'code' => '2012205',
                'name' => 'WIP Karet',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'KG',
                'price' => 30000,
                'raw_id'=>4
            ],

            [
                'id' => 7,
                'code' => '2012206',
                'name' => 'Jelly',
                'description' =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis unde numquam id recusandae dolorem quia culpa ipsum voluptas aliquam illum assumenda sed eos quos, ipsa dolor, totam, ducimus esse fuga.', 
                'unit' => 'Buah',
                'price' => 3000,
                'raw_id'=>5
            ],
            
        ]);

    }
}
