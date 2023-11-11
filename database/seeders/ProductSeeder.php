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
        // // Create 10 products
        // for ($i = 0; $i < 50; $i++) {
        //     $category = Category::inRandomOrder()->first();
        //     $isLiked = (bool)rand(0, 1);
        //     Product::create([
        //         'category_id' => $category->id,
        //         'name' => 'Product ' . $i,
        //         'desc' => 'This is a great product!',
        //         'price' => '$45.00',
        //         'IsLiked' => $isLiked
        //     ]);
        // }

        Product::create([
            'category_id' => '1',
            'name' => 'Classic Burger',
            'desc' => 'Juicy beef patty with lettuce, tomato, and special sauce.',
            'price' => '$5.99',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '1',
            'name' => 'Cheeseburger Deluxe',
            'desc' => 'Classic burger with melted cheese and crispy bacon.',
            'price' => '$7.99',
            'IsLiked' => false
        ]);

        Product::create([
            'category_id' => '6',
            'name' => 'Lemonade Sparkler',
            'desc' => 'Sparkling lemonade with a twist of fresh lemon.',
            'price' => '$3.99',
            'IsLiked' => false
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Grilled Chicken Wrap',
            'desc' => 'Grilled chicken, lettuce, and tomatoes wrapped in a warm tortilla.',
            'price' => '$7.49',
            'IsLiked' => false
        ]);
        
        Product::create([
            'category_id' => '3',
            'name' => 'Hawaiian Pizza',
            'desc' => 'Pizza with ham, pineapple, and a blend of cheeses.',
            'price' => '$12.99',
            'IsLiked' => true
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Peanut Butter Cookie',
            'desc' => 'Buttery cookie with chunks of peanut butter and roasted peanuts.',
            'price' => '$2.79',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '4',
            'name' => 'Snickerdoodle',
            'desc' => 'Soft cinnamon sugar cookie with a hint of vanilla.',
            'price' => '$2.49',
            'IsLiked' => false
        ]);
        
        Product::create([
            'category_id' => '5',
            'name' => 'Strawberry Shortcake',
            'desc' => 'Light and fluffy cake layered with fresh strawberries and whipped cream.',
            'price' => '$16.99',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '5',
            'name' => 'Cookies and Cream Cupcake',
            'desc' => 'Chocolate cupcake with cookies and cream frosting.',
            'price' => '$4.49',
            'IsLiked' => false
        ]);
        
        Product::create([
            'category_id' => '6',
            'name' => 'Mango Tango Smoothie',
            'desc' => 'Smoothie with mango, pineapple, and a splash of coconut milk.',
            'price' => '$5.49',
            'IsLiked' => true
        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Mint Chocolate Chip Cone',
            'desc' => 'Mint-flavored ice cream with chocolate chips in a crispy cone.',
            'price' => '$4.49',
            'IsLiked' => false
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Meat Lover\'s Delight',
            'desc' => 'Pizza loaded with sausage, pepperoni, and bacon.',
            'price' => '$14.99',
            'IsLiked' => false
        ]);
        
        Product::create([
            'category_id' => '2',
            'name' => 'Chocolate Fudge Sundae',
            'desc' => 'Vanilla ice cream topped with hot fudge, whipped cream, and a cherry.',
            'price' => '$6.99',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '2',
            'name' => 'Banana Split',
            'desc' => 'A classic banana split with three scoops of ice cream, banana, and toppings.',
            'price' => '$8.99',
            'IsLiked' => false
        ]);
        
        Product::create([
            'category_id' => '4',
            'name' => 'White Chocolate Macadamia Nut Cookie',
            'desc' => 'Buttery cookie with chunks of white chocolate and macadamia nuts.',
            'price' => '$3.29',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '6',
            'name' => 'Iced Green Tea',
            'desc' => 'Refreshing green tea served over ice with a hint of mint.',
            'price' => '$2.99',
            'IsLiked' => false
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Lemon Blueberry Cake',
            'desc' => 'Moist lemon-flavored cake with blueberry filling and cream cheese frosting.',
            'price' => '$17.99',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '5',
            'name' => 'Chocolate Raspberry Cupcake',
            'desc' => 'Rich chocolate cupcake with raspberry filling and chocolate ganache.',
            'price' => '$4.99',
            'IsLiked' => false
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Double Cheeseburger',
            'desc' => 'Two beef patties, double cheese, lettuce, and special sauce.',
            'price' => '$9.99',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '1',
            'name' => 'Crispy Chicken Nuggets',
            'desc' => 'Golden and crispy chicken nuggets served with dipping sauce.',
            'price' => '$5.49',
            'IsLiked' => false
        ]);
        
        Product::create([
            'category_id' => '3',
            'name' => 'BBQ Chicken Pizza',
            'desc' => 'Pizza with BBQ chicken, red onions, and cilantro.',
            'price' => '$13.99',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '3',
            'name' => 'Vegan Margherita Pizza',
            'desc' => 'Plant-based pizza with vegan cheese and fresh tomatoes.',
            'price' => '$11.99',
            'IsLiked' => false
        ]);
        
        Product::create([
            'category_id' => '2',
            'name' => 'Classic Vanilla Cone',
            'desc' => 'Vanilla ice cream in a crispy cone.',
            'price' => '$3.49',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '2',
            'name' => 'Rocky Road Sundae',
            'desc' => 'Sundae with chocolate ice cream, marshmallows, and almonds.',
            'price' => '$7.49',
            'IsLiked' => false
        ]);
        
        Product::create([
            'category_id' => '4',
            'name' => 'Salted Caramel Brownie',
            'desc' => 'Rich chocolate brownie with a layer of salted caramel.',
            'price' => '$4.99',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '4',
            'name' => 'Almond Joy Cookie',
            'desc' => 'Cookie with coconut, chocolate chips, and almonds.',
            'price' => '$2.99',
            'IsLiked' => false
        ]);
        
        Product::create([
            'category_id' => '5',
            'name' => 'Carrot Cake',
            'desc' => 'Moist carrot cake with cream cheese frosting and walnuts.',
            'price' => '$14.99',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '5',
            'name' => 'Raspberry Cheesecake',
            'desc' => 'Creamy cheesecake with a raspberry swirl on a graham cracker crust.',
            'price' => '$19.99',
            'IsLiked' => false
        ]);
        
        Product::create([
            'category_id' => '6',
            'name' => 'Strawberry Lemonade',
            'desc' => 'Refreshing lemonade with fresh strawberries.',
            'price' => '$3.49',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '6',
            'name' => 'Iced Caramel Macchiato',
            'desc' => 'Cold espresso with milk and caramel drizzle.',
            'price' => '$4.99',
            'IsLiked' => false
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Sriracha Bacon Burger',
            'desc' => 'Spicy beef patty with crispy bacon, lettuce, and sriracha mayo.',
            'price' => '$8.99',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '1',
            'name' => 'Sweet Potato Fries',
            'desc' => 'Crispy sweet potato fries with a side of tangy dipping sauce.',
            'price' => '$4.49',
            'IsLiked' => false
        ]);
        
        Product::create([
            'category_id' => '3',
            'name' => 'Mushroom Lovers Pizza',
            'desc' => 'Pizza loaded with assorted mushrooms and mozzarella cheese.',
            'price' => '$12.99',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '3',
            'name' => 'Buffalo Chicken Pizza',
            'desc' => 'Pizza with buffalo chicken, blue cheese, and celery.',
            'price' => '$13.99',
            'IsLiked' => false
        ]);
        
        Product::create([
            'category_id' => '2',
            'name' => 'Pistachio Ice Cream Cone',
            'desc' => 'Creamy pistachio-flavored ice cream in a waffle cone.',
            'price' => '$5.49',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '2',
            'name' => 'Cherry Garcia Sundae',
            'desc' => 'Sundae with cherry ice cream, chocolate chunks, and fudge swirls.',
            'price' => '$6.99',
            'IsLiked' => false
        ]);
        
        Product::create([
            'category_id' => '4',
            'name' => 'Maple Pecan Cookie',
            'desc' => 'Cookie with the rich flavors of maple syrup and crunchy pecans.',
            'price' => '$3.29',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '4',
            'name' => 'Coconut Macaroon',
            'desc' => 'Chewy and sweet coconut macaroon cookie.',
            'price' => '$2.79',
            'IsLiked' => false
        ]);
        
        Product::create([
            'category_id' => '5',
            'name' => 'Black Forest Cake',
            'desc' => 'Decadent chocolate cake with cherries and whipped cream.',
            'price' => '$18.99',
            'IsLiked' => true
        ]);
        
        Product::create([
            'category_id' => '5',
            'name' => 'Lavender Lemon Cupcake',
            'desc' => 'Delicate cupcake with lavender-infused batter and lemon frosting.',
            'price' => '$4.99',
            'IsLiked' => false
        ]);
    }
}
