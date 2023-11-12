<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'category_id' => '1',
            'name' => 'Classic Burger',
            'desc' => 'Juicy beef patty with lettuce, tomato, and special sauce.',
            'price' => '$5.99',
            'IsLiked' => true,
            'image' => "https://png.pngtree.com/png-clipart/20230427/original/pngtree-food-toast-burger-png-image_9113989.png"
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Cheeseburger Deluxe',
            'desc' => 'Classic burger with melted cheese and crispy bacon.',
            'price' => '$7.99',
            'IsLiked' => false,
            'image' => "https://static.vecteezy.com/system/resources/previews/023/522/925/original/beef-burger-cutout-free-png.png"
        ]);

        Product::create([
            'category_id' => '6',
            'name' => 'Lemonade Sparkler',
            'desc' => 'Sparkling lemonade with a twist of fresh lemon.',
            'price' => '$3.99',
            'IsLiked' => false,
            'image' => "https://dairyqueen-prod.dotcdn.io/dA/16edb9ba91/fileAsset/Watermelon_Lemonade_Sparkler.png"
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Grilled Chicken Wrap',
            'desc' => 'Grilled chicken, lettuce, and tomatoes wrapped in a warm tortilla.',
            'price' => '$7.49',
            'IsLiked' => false,
            'image' => "https://hartperiperi.co.uk/wp-content/uploads/2021/08/352-3529693_grilled-chicken-wrap-chick-fil-hd-png-download-removebg-preview.png"
        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Hawaiian Pizza',
            'desc' => 'Pizza with ham, pineapple, and a blend of cheeses.',
            'price' => '$12.99',
            'IsLiked' => true,
            'image' => "https://jimmysaberdeen.com/wp-content/uploads/2017/01/hawaiian-min.png"
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Peanut Butter Cookie',
            'desc' => 'Buttery cookie with chunks of peanut butter and roasted peanuts.',
            'price' => '$2.79',
            'IsLiked' => true,
            'image' => "https://www.otisspunkmeyer.com/sites/default/files/products/OS-Fundraising-PeanutButterTop_2017-20728-021_0.png"
        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Snickerdoodle',
            'desc' => 'Soft cinnamon sugar cookie with a hint of vanilla.',
            'price' => '$2.49',
            'IsLiked' => false,
            'image' => "https://www.otisspunkmeyer.com/sites/default/files/products/OS-Fundraising-SnickerdoodleTop_2017-20722-041_0.png"
        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Strawberry Shortcake',
            'desc' => 'Light and fluffy cake layered with fresh strawberries and whipped cream.',
            'price' => '$16.99',
            'IsLiked' => true,
            'image' => "https://i.pinimg.com/originals/65/a2/3a/65a23adbee82a2e8dcd8eaeb3d1368cb.png"

        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Cookies and Cream Cupcake',
            'desc' => 'Chocolate cupcake with cookies and cream frosting.',
            'price' => '$4.49',
            'IsLiked' => false,
            'image' => "https://harvestbakery.com/wp-content/uploads/2016/04/OreoCupCake_clipped_rev_1.png"

        ]);

        Product::create([
            'category_id' => '6',
            'name' => 'Mango Tango Smoothie',
            'desc' => 'Smoothie with mango, pineapple, and a splash of coconut milk.',
            'price' => '$5.49',
            'IsLiked' => true,
            'image' => "https://getfresh.co.th/wp-content/uploads/2022/03/Mango-Tango.png"

        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Mint Chocolate Chip Cone',
            'desc' => 'Mint-flavored ice cream with chocolate chips in a crispy cone.',
            'price' => '$4.49',
            'IsLiked' => false,
            'image' => "https://cedarcresticecream.com/wp-content/uploads/2020/10/Mint-Chocolate-Chip-copy-2.png"

        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Meat Lover\'s Delight',
            'desc' => 'Pizza loaded with sausage, pepperoni, and bacon.',
            'price' => '$14.99',
            'IsLiked' => false,
            'image' => "https://www.pngkey.com/png/full/279-2799836_meat-lovers-small-many-calories-in-pizza.png"

        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Chocolate Fudge Sundae',
            'desc' => 'Vanilla ice cream topped with hot fudge, whipped cream, and a cherry.',
            'price' => '$6.99',
            'IsLiked' => true,
            'image' => "https://mcdonalds.com.pk/wp-content/uploads/2022/08/Hot-Fudge-Sundae.png"

        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Banana Split',
            'desc' => 'A classic banana split with three scoops of ice cream, banana, and toppings.',
            'price' => '$8.99',
            'IsLiked' => false,
            'image' => "https://bloximages.newyork1.vip.townnews.com/gazette.com/content/tncms/assets/v3/editorial/9/b4/9b44780a-9f59-11e9-97a4-0b65e08e2838/5d1fa269b5107.image.png"

        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'White Chocolate Macadamia Nut Cookie',
            'desc' => 'Buttery cookie with chunks of white chocolate and macadamia nuts.',
            'price' => '$3.29',
            'IsLiked' => true,
            'image' => "https://www.otisspunkmeyer.com/sites/default/files/styles/large/public/products/OS-Fundraising-WhiteChocolateMacadamiaNutTop_2017-20731-028_0.png?itok=BYAo4MPj"

        ]);

        Product::create([
            'category_id' => '6',
            'name' => 'Iced Green Tea',
            'desc' => 'Refreshing green tea served over ice with a hint of mint.',
            'price' => '$2.99',
            'IsLiked' => false,
            'image' => "https://static.vecteezy.com/system/resources/previews/009/887/126/original/iced-green-tea-with-a-straw-free-png.png"

        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Lemon Blueberry Cake',
            'desc' => 'Moist lemon-flavored cake with blueberry filling and cream cheese frosting.',
            'price' => '$17.99',
            'IsLiked' => true,
            'image' => "https://static.vecteezy.com/system/resources/previews/027/145/263/original/delicious-lemon-blueberry-cake-isolated-on-transparent-background-png.png"

        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Chocolate Raspberry Cupcake',
            'desc' => 'Rich chocolate cupcake with raspberry filling and chocolate ganache.',
            'price' => '$4.99',
            'IsLiked' => false,
            'image' => "https://static.vecteezy.com/system/resources/previews/029/890/219/original/watercolor-fresh-sweet-chocolate-cupcakes-and-strawberry-berry-topping-cream-homemade-bakery-with-dessert-and-food-illustration-ai-generated-free-png.png"

        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Double Cheeseburger',
            'desc' => 'Two beef patties, double cheese, lettuce, and special sauce.',
            'price' => '$9.99',
            'IsLiked' => true,
            'image' => "https://static.vecteezy.com/system/resources/previews/025/252/271/original/big-beef-double-cheese-burger-ai-generated-free-png.png"
        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Crispy Chicken Nuggets',
            'desc' => 'Golden and crispy chicken nuggets served with dipping sauce.',
            'price' => '$5.49',
            'IsLiked' => false,
            'image' => "https://static.vecteezy.com/system/resources/previews/027/308/973/original/chicken-nugget-with-ai-generated-free-png.png"

        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'BBQ Chicken Pizza',
            'desc' => 'Pizza with BBQ chicken, red onions, and cilantro.',
            'price' => '$13.99',
            'IsLiked' => true,
            'image' => "https://static.vecteezy.com/system/resources/previews/024/108/111/original/tasty-bbq-chicken-cheese-pizza-isolated-on-transparent-background-png.png"

        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Vegan Margherita Pizza',
            'desc' => 'Plant-based pizza with vegan cheese and fresh tomatoes.',
            'price' => '$11.99',
            'IsLiked' => false,
            'image' => "https://static.vecteezy.com/system/resources/previews/021/916/564/non_2x/vegetarian-pizza-isolated-on-a-transparent-background-png.png"

        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Classic Vanilla Cone',
            'desc' => 'Vanilla ice cream in a crispy cone.',
            'price' => '$3.49',
            'IsLiked' => true,
            'image' => "https://www.simpleskincare.com/sk-eu/content/dam/brands/klondike/united_states_ofamerica/2335496-075856000511-cones.png"

        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Rocky Road Sundae',
            'desc' => 'Sundae with chocolate ice cream, marshmallows, and almonds.',
            'price' => '$7.49',
            'IsLiked' => false,
            'image' => "https://cedarcresticecream.com/wp-content/uploads/2021/01/Rocky-Road2.png"

        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Salted Caramel Brownie',
            'desc' => 'Rich chocolate brownie with a layer of salted caramel.',
            'price' => '$4.99',
            'IsLiked' => true,
            'image' => "https://theccc.com.au/cdn/shop/products/Salted-Caramel-Brownies.png?v=1661594556"

        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Almond Joy Cookie',
            'desc' => 'Cookie with coconut, chocolate chips, and almonds.',
            'price' => '$2.99',
            'IsLiked' => false,
            'image' => "https://png.pngtree.com/png-clipart/20230623/original/pngtree-almond-cookies-png-image_9204355.png"

        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Carrot Cake',
            'desc' => 'Moist carrot cake with cream cheese frosting and walnuts.',
            'price' => '$14.99',
            'IsLiked' => true,
            'image' => "https://img.freepik.com/free-photo/carrot-cakes-isolated_1203-3154.jpg?size=338&ext=jpg&ga=GA1.1.1826414947.1699488000&semt=ais"

        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Raspberry Cheesecake',
            'desc' => 'Creamy cheesecake with a raspberry swirl on a graham cracker crust.',
            'price' => '$19.99',
            'IsLiked' => false,
            'image' => "https://belchicken.com/wp-content/uploads/2022/01/frambuaz.png"

        ]);

        Product::create([
            'category_id' => '6',
            'name' => 'Strawberry Lemonade',
            'desc' => 'Refreshing lemonade with fresh strawberries.',
            'price' => '$3.49',
            'IsLiked' => true,
            'image' => "https://ejbrandy.com/images/cocktails/EJBrandy_Strawberry_Lemonade_Cocktail.png"
        ]);

        Product::create([
            'category_id' => '6',
            'name' => 'Iced Caramel Macchiato',
            'desc' => 'Cold espresso with milk and caramel drizzle.',
            'price' => '$4.99',
            'IsLiked' => false,
            'image' => "https://www.starbucksathome.com/gb/sites/default/files/2021-04/10032021_IcedCaramel_Work_CS-min.png"

        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Sriracha Bacon Burger',
            'desc' => 'Spicy beef patty with crispy bacon, lettuce, and sriracha mayo.',
            'price' => '$8.99',
            'IsLiked' => true,
            'image' => "https://png.pngtree.com/png-clipart/20230812/ourmid/pngtree-bacon-burger-png-image_9127893.png"

        ]);

        Product::create([
            'category_id' => '1',
            'name' => 'Sweet Potato Fries',
            'desc' => 'Crispy sweet potato fries with a side of tangy dipping sauce.',
            'price' => '$4.49',
            'IsLiked' => false,
            'image' => "https://www.lordofthefries.com.au/wp-content/uploads/2019/11/sweet-potato-fries-v2.png"

        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Mushroom Lovers Pizza',
            'desc' => 'Pizza loaded with assorted mushrooms and mozzarella cheese.',
            'price' => '$12.99',
            'IsLiked' => true,
            'image' => "https://www.freeiconspng.com/uploads/pizza-png-27.png"

        ]);

        Product::create([
            'category_id' => '3',
            'name' => 'Buffalo Chicken Pizza',
            'desc' => 'Pizza with buffalo chicken, blue cheese, and celery.',
            'price' => '$13.99',
            'IsLiked' => false,
            'image' => "https://johnnysph.com/wp-content/uploads/2021/07/Buffalo-Chicken-Angled.png"

        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Pistachio Ice Cream Cone',
            'desc' => 'Creamy pistachio-flavored ice cream in a waffle cone.',
            'price' => '$5.49',
            'IsLiked' => true,
            'image' => "https://static.vecteezy.com/system/resources/previews/027/144/747/original/tasty-pistachio-ice-cream-isolated-on-transparent-background-free-png.png"

        ]);

        Product::create([
            'category_id' => '2',
            'name' => 'Cherry Garcia Sundae',
            'desc' => 'Sundae with cherry ice cream, chocolate chunks, and fudge swirls.',
            'price' => '$6.99',
            'IsLiked' => false,
            'image' => "https://static.vecteezy.com/system/resources/previews/027/144/378/original/tasty-cherry-ice-cream-isolated-on-transparent-background-png.png"

        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Maple Pecan Cookie',
            'desc' => 'Cookie with the rich flavors of maple syrup and crunchy pecans.',
            'price' => '$3.29',
            'IsLiked' => true,
            'image' => "https://static.wixstatic.com/media/2f06d2_fc378a47682e44c6bceca8c89fece0f1~mv2.png/v1/fit/w_500,h_500,q_90/file.png"

        ]);

        Product::create([
            'category_id' => '4',
            'name' => 'Coconut Macaroon',
            'desc' => 'Chewy and sweet coconut macaroon cookie.',
            'price' => '$2.79',
            'IsLiked' => false,
            'image' => "https://png.pngtree.com/png-clipart/20230924/original/pngtree-stack-of-coconut-macaroons-sweet-picture-image_13080311.png"

        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Black Forest Cake',
            'desc' => 'Decadent chocolate cake with cherries and whipped cream.',
            'price' => '$18.99',
            'IsLiked' => true,
            'image' => "https://static.vecteezy.com/system/resources/previews/027/144/000/original/delicious-black-forest-cake-decorated-with-fresh-cherries-on-background-png.png"

        ]);

        Product::create([
            'category_id' => '5',
            'name' => 'Lavender Lemon Cupcake',
            'desc' => 'Delicate cupcake with lavender-infused batter and lemon frosting.',
            'price' => '$4.99',
            'IsLiked' => false,
            'image' => "https://png.pngtree.com/png-clipart/20231016/original/pngtree-lemon-meringue-cupcake-png-image_13321568.png"

        ]);
    }
}
