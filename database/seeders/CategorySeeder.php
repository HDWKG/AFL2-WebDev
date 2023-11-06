<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Burger',
            'coverimg' => '',
            'logo' => '',
            'desc' => 'Discover a wide variety of burger options, each lovingly crafted to perfection by our talented chefs. Sink your teeth into juicy beef patties, tender chicken burgers, or delectable plant-based alternatives. You can also explore an array of buns, toppings, sauces, and sides to personalize your burger experience just the way you like it.'
        ]);
        Category::create([
            'name' => 'Ice Cream',
            'coverimg' => '',
            'logo' => '',
            'desc' => 'Explore a kaleidoscope of flavors, from classic vanilla and chocolate to exotic fruit sorbets and artisanal creations. Our ice cream artisans have carefully crafted each scoop to perfection, ensuring a rich and creamy experience with every bite.'
        ]);
        Category::create([
            'name' => 'Pizza',
            'coverimg' => '',
            'logo' => '',
            'desc' => 'Our pizzas are made with the finest ingredients, from the dough to the toppings. We use only the freshest vegetables, the most succulent meats, and the most flavorful cheeses to create a pizza experience that is truly unforgettable.'
        ]);
        Category::create([
            'name' => 'Cookie',
            'coverimg' => '',
            'logo' => '',
            'desc' => 'Indulge in a wide variety of cookies, from classic chocolate chip and buttery shortbread to exotic flavors that will transport your senses to distant places. Each cookie is lovingly baked to perfection, offering a delicate balance of flavors and textures that make every bite a little piece of heaven.'
        ]);
        Category::create([
            'name' => 'Cake',
            'coverimg' => '',
            'logo' => '',
            'desc' => 'Explore a wide array of cake options, from classic layered cakes with fluffy frosting to artisanal creations that are as beautiful as they are tasty. Each cake is a masterpiece, carefully crafted to deliver a symphony of flavors and textures that will leave you craving for more.'
        ]);
        Category::create([
            'name' => 'Drinks',
            'coverimg' => '',
            'logo' => '',
            'desc' => 'Whether you are in the mood for a morning pick-me-up, a post-work wind-down, or a toast to a special occasion, our Drinks category offers a tantalizing range of options. Each beverage is a celebration of taste and craftsmanship, designed to complement your unique moments and create new memories.'
        ]);
    }
}
