<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FavoritesTableSeeder extends Seeder
{
    /**
     * Seed the favorites table.
     */
    public function run(): void
    {
       
        $favorites = [
            [
                'id'=>1,
                'product_id' => 2,
                'user_id' => 1,
            ],
          
          
     
        ];

    
        DB::table('favorites')->insert($favorites);
    }
}
