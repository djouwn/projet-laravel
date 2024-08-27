<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SavingsTableSeeder extends Seeder
{
    /**
     * Seed the savings table.
     */
    public function run(): void
    {
       
        $savings = [
            [
                'product_id' => 3,
                'user_id' => 1,
            ],
           
        ];
       
        DB::table('savings')->insert($savings);
    }
}
