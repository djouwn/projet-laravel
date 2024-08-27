<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Seed the categories table.
     */
    public function run(): void
    {
       
        $categories = [
            ['age' => 'adult', 'genre' => 'male', 'type' => 'sac'],
            ['age' => 'adult', 'genre' => 'female', 'type' => 'espadrille'],
            ['age' => 'kids', 'genre' => 'male', 'type' => 'accessoire'],
            ['age' => 'kids', 'genre' => 'female', 'type' => 'sandles'],
            ['age' => 'teenager', 'genre' => 'other', 'type' => 'baskets'],
            ['age' => 'adult', 'genre' => 'female', 'type' => 'glasses'],
        ];

       
        DB::table('categories')->insert($categories);
    }
}
