<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 10 products
        for ($i = 0; $i < 50; $i++) {
            $category = Category::inRandomOrder()->first();
            $isLiked = (bool)rand(0, 1);
            Product::create([
                'category_id' => $category->id,
                'name' => 'Product ' . $i,
                'desc' => 'This is a great product!',
                'price' => '$45.00',
                'IsLiked' => $isLiked
            ]);
        }
    }
}
