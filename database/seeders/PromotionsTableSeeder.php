<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromotionsTableSeeder extends Seeder
{
   
    public function run(): void
    {
       
        $promotions = [
            [
                'product_id' => 1,
                'type' => 'discount',
                'rule' => '10% off',
            ],
            [
                'product_id' => 1,
                'type' => 'discount',
                'rule' => 'Buy One Get One',
            ],
            [
                'product_id' => 1,
                'type' => 'discount',
                'rule' => 'Buy two Get One',
            ],
            [
                'product_id' => 1,
                'type' => 'discount',
                'rule' => 'Refer a Friend and get 10% OFF',
            ],
          
        ];

        DB::table('promotions')->insert($promotions);
    }
}
