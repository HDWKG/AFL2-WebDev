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
            'name' => 'Tasty Burger',
            'coverimg' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/47/Hamburger_%28black_bg%29.jpg/800px-Hamburger_%28black_bg%29.jpg',
            'logo' => 'https://img.freepik.com/premium-vector/burger-logo-icon_567288-500.jpg',
            'desc' => 'Discover a wide variety of burger options, each lovingly crafted to perfection by our talented chefs. Sink your teeth into juicy beef patties, tender chicken burgers, or delectable plant-based alternatives. You can also explore an array of buns, toppings, sauces, and sides to personalize your burger experience just the way you like it.'
        ]);
        Category::create([
            'name' => 'Ice Cream',
            'coverimg' => 'https://t0.gstatic.com/licensed-image?q=tbn:ANd9GcSRA1VvVWshDqdk-IbClyNwWoUAjMnFQ5KQLb8eH0hu4gCCvfvqMEcQqOF-CTro2maW',
            'logo' => 'https://png.pngtree.com/png-vector/20190721/ourmid/pngtree-ice-cream-icon-for-your-project-png-image_1557366.jpg',
            'desc' => 'Explore a kaleidoscope of flavors, from classic vanilla and chocolate to exotic fruit sorbets and artisanal creations. Our ice cream artisans have carefully crafted each scoop to perfection, ensuring a rich and creamy experience with every bite.'
        ]);
        Category::create([
            'name' => 'Pizza',
            'coverimg' => 'https://www.allrecipes.com/thmb/fFW1o307WSqFFYQ3-QXYVpnFj6E=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/48727-Mikes-homemade-pizza-DDMFS-beauty-4x3-BG-2974-a7a9842c14e34ca699f3b7d7143256cf.jpg',
            'logo' => 'https://images.vexels.com/media/users/3/157230/isolated/preview/32f8e717216dadf6c768e1554378be89-simple-pizza-slice-icon.png',
            'desc' => 'Our pizzas are made with the finest ingredients, from the dough to the toppings. We use only the freshest vegetables, the most succulent meats, and the most flavorful cheeses to create a pizza experience that is truly unforgettable.'
        ]);
        Category::create([
            'name' => 'Cookie',
            'coverimg' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/2ChocolateChipCookies.jpg/1200px-2ChocolateChipCookies.jpg',
            'logo' => 'https://www.pngall.com/wp-content/uploads/13/Cookies-Logo-PNG-Images.png',
            'desc' => 'Indulge in a wide variety of cookies, from classic chocolate chip and buttery shortbread to exotic flavors that will transport your senses to distant places. Each cookie is lovingly baked to perfection, offering a delicate balance of flavors and textures that make every bite a little piece of heaven.'
        ]);
        Category::create([
            'name' => 'Cake',
            'coverimg' => 'https://asset.kompas.com/crops/Gt9Q43OaTMIFYJ5Yg225gKTktqs=/0x0:1000x667/750x500/data/photo/2023/02/01/63da3ce942e18.jpeg',
            'logo' => 'https://pixsector.com/cache/06937d19/av1a33789be1bf3be6acc.png',
            'desc' => 'Explore a wide array of cake options, from classic layered cakes with fluffy frosting to artisanal creations that are as beautiful as they are tasty. Each cake is a masterpiece, carefully crafted to deliver a symphony of flavors and textures that will leave you craving for more.'
        ]);
        Category::create([
            'name' => 'Drinks',
            'coverimg' => 'https://www.acouplecooks.com/wp-content/uploads/2021/06/Strawberry-Water-006.jpg',
            'logo' => 'https://www.pngplay.com/wp-content/uploads/6/Beverage-Logo-PNG-Clipart-Background.png',
            'desc' => 'Whether you are in the mood for a morning pick-me-up, a post-work wind-down, or a toast to a special occasion, our Drinks category offers a tantalizing range of options. Each beverage is a celebration of taste and craftsmanship, designed to complement your unique moments and create new memories.'
        ]);
    }
}
