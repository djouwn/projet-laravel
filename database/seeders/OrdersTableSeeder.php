<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('orders')->insert([
            [
                'user_id' => 1,
                'product_id' => 1,
                'total_billing' => 99.99,
            ],
            [
                'user_id' => 2,
                'product_id' => 2,
                'total_billing' => 49.99,
            ],
           
        ]);
    }
}

