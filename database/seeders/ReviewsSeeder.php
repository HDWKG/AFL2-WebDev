<?php

namespace Database\Seeders;

use App\Models\Reviews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reviews for Maple Pecan Cookie
        Reviews::create([
            'name' => 'Oliver Turner',
            'review' => 'The maple pecan cookie is a delightful treat with a perfect blend of maple and nutty flavors.',
            'stars' => '4',
            'directed' => 'Maple Pecan Cookie',
        ]);

        Reviews::create([
            'name' => 'Lily Baker',
            'review' => 'As a fan of pecans, this cookie was a delightful surprise. The maple adds a nice touch!',
            'stars' => '5',
            'directed' => 'Maple Pecan Cookie',
        ]);

        Reviews::create([
            'name' => 'Lucas Foster',
            'review' => 'The maple pecan cookie is a must-try for anyone who enjoys the rich taste of maple. Highly recommended!',
            'stars' => '5',
            'directed' => 'Maple Pecan Cookie',
        ]);

        // Reviews for Cherry Garcia Sundae
        Reviews::create([
            'name' => 'Zara Murphy',
            'review' => 'The Cherry Garcia Sundae is a delightful combination of cherry ice cream, chocolate chunks, and fudge swirls.',
            'stars' => '5',
            'directed' => 'Cherry Garcia Sundae',
        ]);

        Reviews::create([
            'name' => 'Caleb Scott',
            'review' => 'A delicious twist on a classic sundae. The cherry flavor is perfect, and the chocolate chunks add a nice crunch!',
            'stars' => '4',
            'directed' => 'Cherry Garcia Sundae',
        ]);

        Reviews::create([
            'name' => 'Maya Turner',
            'review' => 'Cherry Garcia Sundae is a delightful and indulgent dessert. Perfect for those who love the combination of cherry and chocolate!',
            'stars' => '5',
            'directed' => 'Cherry Garcia Sundae',
        ]);

        // Reviews for Coconut Macaroon
        Reviews::create([
            'name' => 'Elijah Baker',
            'review' => 'The coconut macaroon is a chewy and sweet delight. The coconut flavor is just right!',
            'stars' => '4',
            'directed' => 'Coconut Macaroon',
        ]);

        Reviews::create([
            'name' => 'Sophia Foster',
            'review' => 'As a coconut lover, this macaroon exceeded my expectations. Perfectly chewy with a hint of sweetness!',
            'stars' => '5',
            'directed' => 'Coconut Macaroon',
        ]);

        Reviews::create([
            'name' => 'Jackson Adams',
            'review' => 'The coconut macaroon is a delicious treat for coconut enthusiasts. Loved the texture and flavor!',
            'stars' => '5',
            'directed' => 'Coconut Macaroon',
        ]);

        // Reviews for Black Forest Cake
        Reviews::create([
            'name' => 'Scarlett Murphy',
            'review' => 'The Black Forest Cake is a decadent delight with rich chocolate, cherries, and whipped cream. A true indulgence!',
            'stars' => '5',
            'directed' => 'Black Forest Cake',
        ]);

        Reviews::create([
            'name' => 'Henry Scott',
            'review' => 'A classic dessert done right. The combination of chocolate, cherries, and cream is heavenly!',
            'stars' => '4',
            'directed' => 'Black Forest Cake',
        ]);

        Reviews::create([
            'name' => 'Emma Turner',
            'review' => 'Black Forest Cake is a must-try for chocolate and cherry lovers. Absolutely delicious and satisfying!',
            'stars' => '5',
            'directed' => 'Black Forest Cake',
        ]);

        // Reviews for Lavender Lemon Cupcake
        Reviews::create([
            'name' => 'Mila Baker',
            'review' => 'The Lavender Lemon Cupcake is a delicate and flavorful treat. The lavender-infused batter and lemon frosting are a perfect combination!',
            'stars' => '5',
            'directed' => 'Lavender Lemon Cupcake',
        ]);

        Reviews::create([
            'name' => 'Carter Foster',
            'review' => 'A unique cupcake with a lovely balance of lavender and lemon flavors. A delightful dessert!',
            'stars' => '4',
            'directed' => 'Lavender Lemon Cupcake',
        ]);

        Reviews::create([
            'name' => 'Avery Adams',
            'review' => 'Lavender Lemon Cupcake is a perfect blend of floral and citrus notes. Truly enjoyed every bite!',
            'stars' => '5',
            'directed' => 'Lavender Lemon Cupcake',
        ]);

        // Reviews for Raspberry Cookie
        Reviews::create([
            'name' => 'Sophia Turner',
            'review' => 'The raspberry cookie is a delightful mix of sweet and tart flavors. Loved the raspberry bits!',
            'stars' => '4',
            'directed' => 'Raspberry Cookie',
        ]);

        Reviews::create([
            'name' => 'Ethan Adams',
            'review' => 'As a fan of raspberries, this cookie was a pleasant surprise. The perfect balance of flavors!',
            'stars' => '5',
            'directed' => 'Raspberry Cookie',
        ]);

        Reviews::create([
            'name' => 'Mia Hill',
            'review' => 'The raspberry cookie is a must-try for anyone who loves fruity desserts. Absolutely delicious!',
            'stars' => '5',
            'directed' => 'Raspberry Cookie',
        ]);

        // Reviews for Strawberry Lemonade
        Reviews::create([
            'name' => 'Aiden Baker',
            'review' => 'Refreshing and flavorful strawberry lemonade. The perfect drink for a hot day!',
            'stars' => '5',
            'directed' => 'Strawberry Lemonade',
        ]);

        Reviews::create([
            'name' => 'Layla Foster',
            'review' => 'The strawberry lemonade is a great balance of sweetness and tartness. Highly recommended!',
            'stars' => '4',
            'directed' => 'Strawberry Lemonade',
        ]);

        Reviews::create([
            'name' => 'Parker Turner',
            'review' => 'A delicious twist on classic lemonade. The addition of strawberries adds a burst of flavor!',
            'stars' => '5',
            'directed' => 'Strawberry Lemonade',
        ]);

        // Reviews for Iced Caramel Macchiato
        Reviews::create([
            'name' => 'Harper Murphy',
            'review' => 'The iced caramel macchiato is a perfect blend of coffee and caramel sweetness. Loved it!',
            'stars' => '4',
            'directed' => 'Iced Caramel Macchiato',
        ]);

        Reviews::create([
            'name' => 'Sebastian Scott',
            'review' => 'As a coffee lover, this iced caramel macchiato hit all the right notes. Great flavor!',
            'stars' => '5',
            'directed' => 'Iced Caramel Macchiato',
        ]);

        Reviews::create([
            'name' => 'Nova Adams',
            'review' => 'The iced caramel macchiato is a delicious and refreshing coffee drink. Highly recommended!',
            'stars' => '5',
            'directed' => 'Iced Caramel Macchiato',
        ]);

        // Reviews for Sriracha Bacon Burger
        Reviews::create([
            'name' => 'Zoe Turner',
            'review' => 'The sriracha bacon burger is a spicy delight! Perfect for those who love a kick in their burger.',
            'stars' => '5',
            'directed' => 'Sriracha Bacon Burger',
        ]);

        Reviews::create([
            'name' => 'Henry Baker',
            'review' => 'A burger with a spicy twist! The sriracha bacon adds a unique and delicious flavor.',
            'stars' => '4',
            'directed' => 'Sriracha Bacon Burger',
        ]);

        Reviews::create([
            'name' => 'Aria Foster',
            'review' => 'If you love spicy food, the sriracha bacon burger is a must-try. Flavorful and satisfying!',
            'stars' => '5',
            'directed' => 'Sriracha Bacon Burger',
        ]);

        // Reviews for Sweet Potato Fries
        Reviews::create([
            'name' => 'Leo Hill',
            'review' => 'Crispy and flavorful sweet potato fries. A tasty alternative to regular fries!',
            'stars' => '4',
            'directed' => 'Sweet Potato Fries',
        ]);

        Reviews::create([
            'name' => 'Ava Turner',
            'review' => 'The sweet potato fries are a perfect side dish. Loved the sweetness and crispiness!',
            'stars' => '5',
            'directed' => 'Sweet Potato Fries',
        ]);

        Reviews::create([
            'name' => 'Logan Adams',
            'review' => 'A great addition to any meal. The sweet potato fries are a hit in our family!',
            'stars' => '5',
            'directed' => 'Sweet Potato Fries',
        ]);

        // Reviews for Mushroom Lovers Pizza
        Reviews::create([
            'name' => 'Sophie Murphy',
            'review' => 'The mushroom lovers pizza is a savory delight. Perfect for mushroom enthusiasts!',
            'stars' => '5',
            'directed' => 'Mushroom Lovers Pizza',
        ]);

        Reviews::create([
            'name' => 'Oscar Scott',
            'review' => 'If you love mushrooms, this pizza is a dream come true. Delicious and satisfying!',
            'stars' => '4',
            'directed' => 'Mushroom Lovers Pizza',
        ]);

        Reviews::create([
            'name' => 'Evelyn Turner',
            'review' => 'Mushroom lovers pizza is a flavorful and hearty choice. The perfect pizza for mushroom lovers!',
            'stars' => '5',
            'directed' => 'Mushroom Lovers Pizza',
        ]);

        // Reviews for Buffalo Chicken Pizza
        Reviews::create([
            'name' => 'Mateo Baker',
            'review' => 'The buffalo chicken pizza is a spicy delight. Perfect for those who enjoy a kick in their pizza!',
            'stars' => '5',
            'directed' => 'Buffalo Chicken Pizza',
        ]);

        Reviews::create([
            'name' => 'Luna Foster',
            'review' => 'Buffalo chicken pizza has the right amount of spice. A great choice for pizza lovers!',
            'stars' => '4',
            'directed' => 'Buffalo Chicken Pizza',
        ]);

        Reviews::create([
            'name' => 'Eli Turner',
            'review' => 'If you love buffalo chicken, this pizza is a must-try. Flavorful and satisfying!',
            'stars' => '5',
            'directed' => 'Buffalo Chicken Pizza',
        ]);

        // Reviews for Pistachio Ice Cream Cone
        Reviews::create([
            'name' => 'Isla Murphy',
            'review' => 'The pistachio ice cream cone is a unique and delicious treat. A must-try for ice cream lovers!',
            'stars' => '5',
            'directed' => 'Pistachio Ice Cream Cone',
        ]);

        Reviews::create([
            'name' => 'Max Scott',
            'review' => 'As a pistachio fan, this ice cream cone exceeded my expectations. Creamy and flavorful!',
            'stars' => '4',
            'directed' => 'Pistachio Ice Cream Cone',
        ]);

        Reviews::create([
            'name' => 'Bella Adams',
            'review' => 'The pistachio ice cream cone is a delightful combination of creamy and nutty. Loved it!',
            'stars' => '5',
            'directed' => 'Pistachio Ice Cream Cone',
        ]);

        // Reviews for BBQ Chicken Pizza
        Reviews::create([
            'name' => 'Olivia Clark',
            'review' => 'The BBQ chicken pizza is a flavor explosion! The combination of chicken and BBQ sauce is amazing.',
            'stars' => '5',
            'directed' => 'BBQ Chicken Pizza',
        ]);

        Reviews::create([
            'name' => 'Lucas Baker',
            'review' => 'Not a fan of the BBQ chicken pizza. The flavors felt a bit overpowering for me.',
            'stars' => '3',
            'directed' => 'BBQ Chicken Pizza',
        ]);

        Reviews::create([
            'name' => 'Emma Hill',
            'review' => 'Great pizza with a perfect balance of BBQ chicken and cheese. A must-try for pizza lovers!',
            'stars' => '4',
            'directed' => 'BBQ Chicken Pizza',
        ]);

        // Reviews for Vegan Margherita Pizza
        Reviews::create([
            'name' => 'Gabriel Turner',
            'review' => 'Surprisingly delicious vegan margherita pizza. The vegan cheese is on point!',
            'stars' => '5',
            'directed' => 'Vegan Margherita Pizza',
        ]);

        Reviews::create([
            'name' => 'Aria Turner',
            'review' => 'I couldn\'t even tell it was vegan! The margherita pizza exceeded my expectations.',
            'stars' => '4',
            'directed' => 'Vegan Margherita Pizza',
        ]);

        Reviews::create([
            'name' => 'Xavier Adams',
            'review' => 'Not a fan of vegan cheese, but this pizza changed my mind. Tasty and satisfying.',
            'stars' => '4',
            'directed' => 'Vegan Margherita Pizza',
        ]);

        // Reviews for Classic Vanilla Cone
        Reviews::create([
            'name' => 'Aaliyah White',
            'review' => 'Classic vanilla cone is a timeless treat. Simple and delicious!',
            'stars' => '5',
            'directed' => 'Classic Vanilla Cone',
        ]);

        Reviews::create([
            'name' => 'Caleb Scott',
            'review' => 'The classic vanilla cone is perfect for those who enjoy the pure essence of vanilla.',
            'stars' => '4',
            'directed' => 'Classic Vanilla Cone',
        ]);

        Reviews::create([
            'name' => 'Madison Martinez',
            'review' => 'Smooth and creamy vanilla ice cream in a crispy cone. Can\'t go wrong with a classic!',
            'stars' => '5',
            'directed' => 'Classic Vanilla Cone',
        ]);

        // Reviews for Rocky Road Sundae
        Reviews::create([
            'name' => 'Eva Turner',
            'review' => 'Rocky road sundae is a delightful mix of textures and flavors. Highly recommended!',
            'stars' => '5',
            'directed' => 'Rocky Road Sundae',
        ]);

        Reviews::create([
            'name' => 'Nathan Murphy',
            'review' => 'I love the combination of chocolate, marshmallows, and almonds in the rocky road sundae.',
            'stars' => '4',
            'directed' => 'Rocky Road Sundae',
        ]);

        Reviews::create([
            'name' => 'Avery Foster',
            'review' => 'The rocky road sundae is a perfect treat for chocolate lovers. Absolutely delicious!',
            'stars' => '5',
            'directed' => 'Rocky Road Sundae',
        ]);

        // Reviews for Salted Caramel Brownie
        Reviews::create([
            'name' => 'Hudson Turner',
            'review' => 'The salted caramel brownie is a decadent delight. Rich and satisfying!',
            'stars' => '5',
            'directed' => 'Salted Caramel Brownie',
        ]);

        Reviews::create([
            'name' => 'Stella Rodriguez',
            'review' => 'Perfect combination of sweet and salty in the salted caramel brownie. A must-try dessert!',
            'stars' => '4',
            'directed' => 'Salted Caramel Brownie',
        ]);

        Reviews::create([
            'name' => 'Leo Scott',
            'review' => 'I\'m a fan of anything salted caramel, and this brownie exceeded my expectations. Yum!',
            'stars' => '5',
            'directed' => 'Salted Caramel Brownie',
        ]);

        // Reviews for Almond Joy Cookie
        Reviews::create([
            'name' => 'Peyton Adams',
            'review' => 'The almond joy cookie is a delightful blend of coconut, chocolate, and almonds. Loved it!',
            'stars' => '5',
            'directed' => 'Almond Joy Cookie',
        ]);

        Reviews::create([
            'name' => 'Zara Cooper',
            'review' => 'As a fan of almond joy, this cookie is now my new favorite. Delicious and satisfying!',
            'stars' => '4',
            'directed' => 'Almond Joy Cookie',
        ]);

        Reviews::create([
            'name' => 'Owen Baker',
            'review' => 'The almond joy cookie is a perfect treat for those who love coconut and almonds.',
            'stars' => '5',
            'directed' => 'Almond Joy Cookie',
        ]);

        // Reviews for Carrot Cake
        Reviews::create([
            'name' => 'Lily Hill',
            'review' => 'Moist and flavorful carrot cake. The cream cheese frosting is the perfect touch!',
            'stars' => '5',
            'directed' => 'Carrot Cake',
        ]);

        Reviews::create([
            'name' => 'Wyatt Foster',
            'review' => 'Carrot cake with cream cheese frosting is a classic, and this one is top-notch. Loved it!',
            'stars' => '4',
            'directed' => 'Carrot Cake',
        ]);

        Reviews::create([
            'name' => 'Hailey Turner',
            'review' => 'The carrot cake exceeded my expectations. A great choice for dessert lovers!',
            'stars' => '5',
            'directed' => 'Carrot Cake',
        ]);

        // Reviews for Iced Green Tea
        Reviews::create([
            'name' => 'Sophia Garcia',
            'review' => 'Refreshing and light iced green tea. Perfect for a hot day!',
            'stars' => '5',
            'directed' => 'Iced Green Tea',
        ]);

        Reviews::create([
            'name' => 'David Rodriguez',
            'review' => 'The iced green tea is a bit too bitter for my liking. Maybe less steeping time would help.',
            'stars' => '3',
            'directed' => 'Iced Green Tea',
        ]);

        Reviews::create([
            'name' => 'Isabella Martinez',
            'review' => 'I love the subtle minty hint in the iced green tea. Great balance of flavors.',
            'stars' => '4',
            'directed' => 'Iced Green Tea',
        ]);

        // Reviews for Lemon Blueberry Cake
        Reviews::create([
            'name' => 'Mason Turner',
            'review' => 'The lemon blueberry cake is a delightful treat! Moist and bursting with flavor.',
            'stars' => '5',
            'directed' => 'Lemon Blueberry Cake',
        ]);

        Reviews::create([
            'name' => 'Grace Foster',
            'review' => 'A bit too sweet for my taste, but the combination of lemon and blueberry is delicious.',
            'stars' => '4',
            'directed' => 'Lemon Blueberry Cake',
        ]);

        Reviews::create([
            'name' => 'Elijah Diaz',
            'review' => 'Lemon blueberry cake is a family favorite. Great for celebrations!',
            'stars' => '5',
            'directed' => 'Lemon Blueberry Cake',
        ]);

        // Reviews for Chocolate Raspberry Cupcake
        Reviews::create([
            'name' => 'Ava Cooper',
            'review' => 'Rich and indulgent chocolate raspberry cupcake. A chocolate lover\'s dream!',
            'stars' => '5',
            'directed' => 'Chocolate Raspberry Cupcake',
        ]);

        Reviews::create([
            'name' => 'Jackson Scott',
            'review' => 'The raspberry flavor is a bit overpowering for me, but the cupcake itself is well-made.',
            'stars' => '3',
            'directed' => 'Chocolate Raspberry Cupcake',
        ]);

        Reviews::create([
            'name' => 'Scarlett Ward',
            'review' => 'Perfect balance of chocolate and raspberry in the cupcake. A must-try!',
            'stars' => '4',
            'directed' => 'Chocolate Raspberry Cupcake',
        ]);

        // Reviews for Double Cheeseburger
        Reviews::create([
            'name' => 'Noah Turner',
            'review' => 'The double cheeseburger is a burger lover\'s dream! Perfectly cheesy and satisfying.',
            'stars' => '5',
            'directed' => 'Double Cheeseburger',
        ]);

        Reviews::create([
            'name' => 'Chloe Murphy',
            'review' => 'Generous portions of cheese, but I found the burger a bit too greasy for my liking.',
            'stars' => '4',
            'directed' => 'Double Cheeseburger',
        ]);

        Reviews::create([
            'name' => 'Liam Henderson',
            'review' => 'Juicy and flavorful double cheeseburger. Great value for the price!',
            'stars' => '5',
            'directed' => 'Double Cheeseburger',
        ]);

        // Reviews for Crispy Chicken Nuggets
        Reviews::create([
            'name' => 'Zoe Stewart',
            'review' => 'Crunchy and delicious crispy chicken nuggets. A favorite among kids!',
            'stars' => '5',
            'directed' => 'Crispy Chicken Nuggets',
        ]);

        Reviews::create([
            'name' => 'Ethan Rivera',
            'review' => 'The crispy chicken nuggets were a bit too salty for my taste. Could use less salt.',
            'stars' => '3',
            'directed' => 'Crispy Chicken Nuggets',
        ]);

        Reviews::create([
            'name' => 'Aiden Lopez',
            'review' => 'Perfectly golden and crispy chicken nuggets. Great for snacking!',
            'stars' => '4',
            'directed' => 'Crispy Chicken Nuggets',
        ]);

        Reviews::create([
            'name' => 'Karen Thomas',
            'review' => "These cookies are so soft and chewy, and the white chocolate chips and macadamia nuts add a perfect amount of sweetness and crunch. They're the perfect treat for any time of day.",
            'stars' => 5,
            'directed' => 'White Chocolate Macadamia Nut Cookie'
        ]);

        Reviews::create([
            'name' => 'Paul Jackson',
            'review' => "I love the combination of white chocolate and macadamia nuts in these cookies. It's a classic flavor that's always a hit.",
            'stars' => 4,
            'directed' => 'White Chocolate Macadamia Nut Cookie'
        ]);

        Reviews::create([
            'name' => 'Linda Moore',
            'review' => "These cookies are a little too sweet for my taste, but they're still a good option for those who love white chocolate and macadamia nuts.",
            'stars' => 3,
            'directed' => 'White Chocolate Macadamia Nut Cookie'
        ]);

        Reviews::create([
            'name' => 'Sarah Brown',
            'review' => "This banana split is so classic and delicious. The three scoops of ice cream are the perfect amount, and the chocolate syrup, strawberry syrup, whipped cream, banana, and nuts add a variety of flavors and textures that make this dessert irresistible.",
            'stars' => 5,
            'directed' => 'Banana Split'
        ]);

        Reviews::create([
            'name' => 'Jane Smith',
            'review' => "I love the combination of ice cream, fruit, and toppings on this banana split. It's a refreshing and satisfying dessert that's perfect for any occasion.",
            'stars' => 4,
            'directed' => 'Banana Split'
        ]);

        Reviews::create([
            'name' => 'John Doe',
            'review' => "This banana split is a little too sweet for my taste, but it's still a good option for those who love ice cream sundaes.",
            'stars' => 3,
            'directed' => 'Banana Split'
        ]);

        Reviews::create([
            'name' => 'Emily Davis',
            'review' => "This sundae is the perfect combination of rich chocolate fudge and creamy vanilla ice cream. The whipped cream and cherry add a touch of sweetness and tartness that takes this dessert over the top.",
            'stars' => 5,
            'directed' => 'Chocolate Fudge Sundae'
        ]);

        Reviews::create([
            'name' => 'Michael Miller',
            'review' => "I love the hot fudge on this sundae. It's so rich and decadent, and it pairs perfectly with the vanilla ice cream.",
            'stars' => 4,
            'directed' => 'Chocolate Fudge Sundae'
        ]);

        Reviews::create([
            'name' => 'Peter Jones',
            'review' => "This sundae is a little too sweet for my taste, but it's still a good option for those who love chocolate desserts.",
            'stars' => 3,
            'directed' => 'Chocolate Fudge Sundae'
        ]);

        Reviews::create([
            'name' => 'Daniel Fernando',
            'review' => "This pizza is a meat lover's dream! The pepperoni, sausage, hamburger, bacon, and ham are all cooked to perfection and packed with flavor.",
            'stars' => 5,
            'directed' => 'Meat Lover\'s Delight'
        ]);

        Reviews::create([
            'name' => 'Maria Sanchez',
            'review' => "I love all the different meats on this pizza. It's the perfect way to satisfy my craving for a savory meal.",
            'stars' => 4,
            'directed' => 'Meat Lover\'s Delight'
        ]);

        Reviews::create([
            'name' => 'Jessica Lopez',
            'review' => "This pizza is a little too greasy for my taste, but it's still a good option for those who love meat lovers pizza.",
            'stars' => 3,
            'directed' => 'Meat Lover\'s Delight'
        ]);

        Reviews::create([
            'name' => 'Daniel Fernando',
            'review' => "This mint chocolate chip cone is so cool and refreshing. The mint ice cream is the perfect balance of sweet and minty, and the chocolate chips add a nice crunch. It's the perfect treat on a hot day.",
            'stars' => 5,
            'directed' => 'Mint Chocolate Chip Cone'
        ]);

        Reviews::create([
            'name' => 'Maria Sanchez',
            'review' => "I love the combination of mint and chocolate in this ice cream cone. It's a classic flavor that's always a hit.",
            'stars' => 4,
            'directed' => 'Mint Chocolate Chip Cone'
        ]);

        Reviews::create([
            'name' => 'Jessica Lopez',
            'review' => "This mint chocolate chip cone is a little too minty for my taste, but it's still a good option for those who love mint chocolate chip ice cream.",
            'stars' => 3,
            'directed' => 'Mint Chocolate Chip Cone'
        ]);

        Reviews::create([
            'name' => 'Karen Thomas',
            'review' => "This mango tango smoothie is so refreshing and flavorful. The mangoes are so fresh and sweet, and the coconut milk adds a nice creaminess. It's the perfect way to beat the heat.",
            'stars' => 5,
            'directed' => 'Mango Tango Smoothie'
        ]);

        Reviews::create([
            'name' => 'Paul Jackson',
            'review' => "I love the combination of mango and coconut in this smoothie. It's a tropical treat that's sure to please your taste buds.",
            'stars' => 4,
            'directed' => 'Mango Tango Smoothie'
        ]);

        Reviews::create([
            'name' => 'Linda Moore',
            'review' => "This mango tango smoothie is a little too sweet for my taste, but it's still a good option for those who love fruit smoothies.",
            'stars' => 3,
            'directed' => 'Mango Tango Smoothie'
        ]);

        Reviews::create([
            'name' => 'Sarah Brown',
            'review' => "This cookies and cream cupcake is so rich and decadent, and the cookies and cream frosting is the perfect amount of sweetness. It's the perfect treat for any occasion.",
            'stars' => 5,
            'directed' => 'Cookies and Cream Cupcake'
        ]);

        Reviews::create([
            'name' => 'Jane Smith',
            'review' => "I love the combination of chocolate and cookies in this cupcake. It's a classic flavor that's always a hit.",
            'stars' => 4,
            'directed' => 'Cookies and Cream Cupcake'
        ]);

        Reviews::create([
            'name' => 'John Doe',
            'review' => "This cookies and cream cupcake is a little too chocolatey for my taste, but it's still a good option for those who love chocolate.",
            'stars' => 3,
            'directed' => 'Cookies and Cream Cupcake'
        ]);

        Reviews::create([
            'name' => 'Emily Davis',
            'review' => "This strawberry shortcake is so light and fluffy, and the strawberries are so fresh and sweet. The whipped cream is the perfect finishing touch.",
            'stars' => 5,
            'directed' => 'Strawberry Shortcake'
        ]);

        Reviews::create([
            'name' => 'Michael Miller',
            'review' => "I love the combination of strawberries and whipped cream on this shortcake. It's a classic dessert that's always a crowd-pleaser.",
            'stars' => 4,
            'directed' => 'Strawberry Shortcake'
        ]);

        Reviews::create([
            'name' => 'Peter Jones',
            'review' => "This strawberry shortcake is a little too sweet for my taste, but it's still a good option for those who love strawberries.",
            'stars' => 3,
            'directed' => 'Strawberry Shortcake'
        ]);

        Reviews::create([
            'name' => 'Sarah Brown',
            'review' => "These snickerdoodles are the perfect balance of sweet and cinnamon. They're soft and chewy, and they have a slightly crispy edge.",
            'stars' => 5,
            'directed' => 'Snickerdoodle'
        ]);

        Reviews::create([
            'name' => 'Jane Smith',
            'review' => "I love the cinnamon sugar coating on these snickerdoodles. It gives them a delicious sweetness that's hard to resist.",
            'stars' => 4,
            'directed' => 'Snickerdoodle'
        ]);

        Reviews::create([
            'name' => 'John Doe',
            'review' => "These snickerdoodles are a little dry for my taste, but they're still a good option for those who love cinnamon.",
            'stars' => 3,
            'directed' => 'Snickerdoodle'
        ]);

        Reviews::create([
            'name' => 'Emily Davis',
            'review' => "These peanut butter cookies are so soft and chewy, and they have the perfect amount of peanut butter flavor. They're the perfect treat for any time of day.",
            'stars' => 5,
            'directed' => 'Peanut Butter Cookie'
        ]);

        Reviews::create([
            'name' => 'Michael Miller',
            'review' => "I love the combination of peanut butter and chocolate in these cookies. They're so rich and decadent, and they're sure to satisfy your sweet tooth.",
            'stars' => 4,
            'directed' => 'Peanut Butter Cookie'
        ]);

        Reviews::create([
            'name' => 'Peter Jones',
            'review' => "These peanut butter cookies are a little too sweet for my taste, but they're still a good option for those who love peanut butter.",
            'stars' => 3,
            'directed' => 'Peanut Butter Cookie'
        ]);

        Reviews::create([
            'name' => 'Daniel Fernando',
            'review' => "Good Hawaiian Pizza with ham, pineapple, and a blend of cheeses.",
            'stars' => 5,
            'directed' => 'Hawaiian Pizza'
        ]);

        Reviews::create([
            'name' => 'Maria Sanchez',
            'review' => "I love the sweet and savory combination of ham, pineapple, and cheese on this pizza. It's a great option for those who are looking for a unique and flavorful pizza.",
            'stars' => 4,
            'directed' => 'Hawaiian Pizza'
        ]);

        Reviews::create([
            'name' => 'Jessica Lopez',
            'review' => "I'm not a big fan of pineapple on pizza, but I actually liked this one. The sweetness of the pineapple is balanced out by the savory ham and cheese.",
            'stars' => 3,
            'directed' => 'Hawaiian Pizza'
        ]);

        Reviews::create([
            'name' => 'John Doe',
            'review' => "This is the best classic burger I've ever had. The beef patty is juicy and flavorful, and the toppings are fresh and crisp. The bun is soft and buttery, and it holds everything together perfectly.",
            'stars' => 5,
            'directed' => 'Classic Burger'
        ]);

        Reviews::create([
            'name' => 'Jane Smith',
            'review' => "I'm not a big burger fan, but I really enjoyed this one. The patty was cooked to perfection, and the sauce was just the right amount of tangy and sweet. The fries were also delicious.",
            'stars' => 4,
            'directed' => 'Classic Burger'
        ]);

        Reviews::create([
            'name' => 'Peter Jones',
            'review' => "This is a great burger for the price. The patty is a little thin, but it's still flavorful. The toppings are fresh and the bun is toasted to perfection.",
            'stars' => 3,
            'directed' => 'Classic Burger'
        ]);
        Reviews::create([
            'name' => 'Sarah Brown',
            'review' => "I love the addition of melted cheese and crispy bacon to this burger. It takes the classic burger to a whole new level.",
            'stars' => 5,
            'directed' => 'Cheeseburger Deluxe'
        ]);

        Reviews::create([
            'name' => 'Michael Miller',
            'review' => "The melted cheese and crispy bacon really make this burger special. The patty is juicy and flavorful, and the bun is soft and buttery.",
            'stars' => 4,
            'directed' => 'Cheeseburger Deluxe'
        ]);

        Reviews::create([
            'name' => 'Emily Davis',
            'review' => "This burger is a little too greasy for my taste, but it's still a good option for those who love cheese and bacon.",
            'stars' => 3,
            'directed' => 'Cheeseburger Deluxe'
        ]);
        Reviews::create([
            'name' => 'David Williams',
            'review' => "This lemonade is so refreshing and flavorful. It's the perfect drink on a hot day.",
            'stars' => 5,
            'directed' => 'Lemonade Sparkler'
        ]);

        Reviews::create([
            'name' => 'Susan Taylor',
            'review' => "I love the hint of fizz in this lemonade. It makes it even more refreshing.",
            'stars' => 4,
            'directed' => 'Lemonade Sparkler'
        ]);

        Reviews::create([
            'name' => 'Mark Wilson',
            'review' => "This lemonade is a little too sweet for my taste, but it's still a good option for those who love sweet drinks.",
            'stars' => 3,
            'directed' => 'Lemonade Sparkler'
        ]);
        Reviews::create([
            'name' => 'Karen Thomas',
            'review' => "This wrap is a great option for those who are looking for a healthy and filling meal. The grilled chicken is tender and flavorful, and the vegetables are fresh and crisp.",
            'stars' => 5,
            'directed' => 'Grilled Chicken Wrap'
        ]);

        Reviews::create([
            'name' => 'Paul Jackson',
            'review' => "I love the combination of grilled chicken and vegetables in this wrap. It's a great way to get your daily dose of protein and fiber.",
            'stars' => 4,
            'directed' => 'Grilled Chicken Wrap'
        ]);

        Reviews::create([
            'name' => 'Linda Moore',
            'review' => "This wrap is a little dry for my taste, but it's still a good option for those who are on the go.",
            'stars' => 3,
            'directed' => 'Grilled Chicken Wrap'
        ]);
    }
}
