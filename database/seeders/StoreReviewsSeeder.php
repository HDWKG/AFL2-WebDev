<?php

namespace Database\Seeders;

use App\Models\StoreReviews;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating a review for branch_id '1'
        StoreReviews::create([
            'name' => 'Sophie Anderson',
            'branch_id' => '1',
            'image' => 'https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGVyc29ufGVufDB8fDB8fHww',
            'review' => 'Fast Food Delight is an absolute gem in the world of fast food. The moment you step in, the inviting aroma of freshly prepared delights hits you, setting the stage for a fantastic dining experience. The menu offers a diverse range of options, from classic burgers to innovative wraps and salads. What truly sets them apart is the quality of their ingredients – everything tastes incredibly fresh. The service is prompt, and the staff is friendly and attentive. Fast Food Delight earns a solid 5-star rating for consistently delivering delicious food with exceptional service. It\'s my go-to spot for a quick and satisfying meal.',
            'stars' => '5'
        ]);

        // Creating two more reviews for branch_id '1'
        StoreReviews::create([
            'name' => 'Alex Carter',
            'branch_id' => '1',
            'image' => 'https://www.wilsoncenter.org/sites/default/files/media/images/person/james-person-1.jpg',
            'review' => 'Fast Food Delight never disappoints! The variety in their menu is impressive, and the flavors are always on point. The staff is knowledgeable about the menu and ready to assist. The cleanliness of the place adds to the overall positive experience. I would give it a solid 4 stars for the great food and atmosphere.',
            'stars' => '4'
        ]);

        StoreReviews::create([
            'name' => 'Emma White',
            'branch_id' => '1',
            'image' => 'https://th.bing.com/th/id/OIP.1kLI9iab6q9JNrhIO0iFjgHaGX?pid=ImgDet&w=2031&h=1745&rs=1',
            'review' => 'I can\'t get enough of Fast Food Delight! The quality of the food is outstanding, and the portion sizes are generous. The staff is efficient, and the service is quick. Whether you\'re in the mood for a classic burger or a healthier option like a salad, they have it all. Solid 5 stars for consistently providing a delightful dining experience.',
            'stars' => '5'
        ]);

        // Creating 3 reviews for branch_id '2'
        StoreReviews::create([
            'name' => 'Ryan Miller',
            'branch_id' => '2',
            'image' => 'https://upload.wikimedia.org/wikipedia/commons/a/a0/Pierre-Person.jpg',
            'review' => 'Fast Food Delight lives up to its name! The food is not only fast but also incredibly delicious. The variety in the menu caters to different tastes, and the prices are reasonable. The staff is friendly, and the service is quick. Definitely a 5-star experience for those looking for a satisfying fast food meal.',
            'stars' => '5'
        ]);

        StoreReviews::create([
            'name' => 'Olivia Davis',
            'branch_id' => '2',
            'image' => 'https://th.bing.com/th/id/R.978e34267eb9b6b30d3b3ebe2c87a7ca?rik=MSEEtsrd3hNj4A&riu=http%3a%2f%2ftheagencymaryland.com%2fwp-content%2fuploads%2f2019%2f03%2fAmanda-Stein.jpg&ehk=aNFwioICpFmR2c5mp5ftn3pYO7smRlV%2bfrBlsh26Hzw%3d&risl=&pid=ImgRaw&r=0',
            'review' => 'I\'m a regular at Fast Food Delight, and it never disappoints. The consistency in quality is impressive, and the flavors are always on point. The staff is courteous and ensures a pleasant dining experience. I highly recommend it for anyone craving delicious fast food. A solid 5-star rating!',
            'stars' => '5'
        ]);

        StoreReviews::create([
            'name' => 'Daniel Johnson',
            'branch_id' => '2',
            'image' => 'https://th.bing.com/th/id/OIP.ZeurSBaRxOqd2A2uys1i5wHaHa?pid=ImgDet&w=1200&h=1200&rs=1',
            'review' => 'Fast Food Delight is my favorite go-to spot! The food is consistently tasty, and the service is top-notch. The menu offers a variety of options, and the portions are satisfying. The friendly atmosphere and quick service make it a perfect place for a quick meal. Definitely deserving of a 5-star rating!',
            'stars' => '5'
        ]);
    }
}
