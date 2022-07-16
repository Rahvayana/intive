<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->insert([
            [
                'code'=>'1012201',
                'stock'=>20,
                'total_price'=>100000,
                'type'=>'raws',
                'source'=>'ADD',
                'status'=>'ADDED',
            ],
            [
                'code'=>'1012202',
                'stock'=>10,
                'total_price'=>1000000,
                'type'=>'raws',
                'source'=>'ADD',
                'status'=>'ADDED',
            ],
            [
                'code'=>'1012203',
                'stock'=>20,
                'total_price'=>600000,
                'type'=>'raws',
                'source'=>'ADD',
                'status'=>'ADDED',
            ],
        ]);
        
    }
}
