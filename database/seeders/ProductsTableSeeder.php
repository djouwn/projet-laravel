<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Seed the products table.
     */
    public function run(): void
    {
    
        $products = [
           
           
        
        [
            'name' => 'Classic Leather Tote',
            'matricule' => 'B001',
            'price' => 89.99,
            'description' => 'Elegantly crafted leather tote bag perfect for any occasion.',
            'quantity' => 120,
            'availablecolor' => 'brown, black',
            'availablesize' => 'small, medium',
            'similarproducts' => 'Elegant Handbag, Stylish Messenger Bag',
            'SKU' => 'stock',
            'discount' => 15.00,
            'category_id' => 1, 
            'gender' => 'female',
            'age' => 'adult',
            'image_add1' => 'https://example.com/images/classic-leather-tote-side.jpg',
            'image_add2' => 'https://example.com/images/classic-leather-tote-front.jpg',
            'image_add3' => 'https://example.com/images/classic-leather-tote-interior.jpg',
            'image' => 'https://cdn.stonefly.filoblu.com/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/2/2/221283_000-01.jpg',
            'producttype' => 'bag',
        ],

        [
            'name' => 'Modern Backpack',
            'matricule' => 'B002',
            'price' => 59.99,
            'description' => 'Stylish and durable backpack with ample space for all your essentials.',
            'quantity' => 85,
            'availablecolor' => 'blue, grey',
            'availablesize' => 'medium',
            'similarproducts' => 'Urban Rucksack, Travel Duffel Bag',
            'SKU' => 'stock',
            'discount' => 10.00,
            'category_id' => 1, 
            'gender' => 'female',
            'age' => 'adult',
            'image_add1' => 'https://example.com/images/modern-backpack-side.jpg',
            'image_add2' => 'https://example.com/images/modern-backpack-front.jpg',
            'image_add3' => 'https://example.com/images/modern-backpack-details.jpg',
            'image' => 'https://cdn.stonefly.filoblu.com/media/catalog/product/cache/image/700x560/e9c3970ab036de70892d86c6d221abfe/2/2/221283_0F1-01.jpg',
            'producttype' => 'bag',
        ]];
        DB::table('products')->insert($products);
    }
}
