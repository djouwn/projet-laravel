<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingsTableSeeder extends Seeder
{
    /**
     * Seed the ratings table.
     */
    public function run(): void
    {
      
        $ratings = [
            [
                'user_id' => 1,
                'product_id' => 3,
                'rating' => 5,
            ],
           
        
           
        ];

     
        DB::table('ratings')->insert($ratings);
    }
}
