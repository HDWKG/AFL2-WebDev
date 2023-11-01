<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 products
        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'name' => 'Product ' . $i,
                'desc' => 'This is a great product!',
                'price' => '$45.00',
            ]);
        }
    }
}
