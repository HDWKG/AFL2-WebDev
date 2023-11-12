<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    public function run()
    {
        Branch::create([
            'branch_name' => 'Branch 1',
            'address' => '123 Main Street',
            'image' => 'https://media-cdn.tripadvisor.com/media/photo-s/27/9f/45/bc/restaurant.jpg',
        ]);

        Branch::create([
            'branch_name' => 'Branch 2',
            'address' => '456 Elm Street',
            'image' => 'https://img3.parisbouge.com/UNBl5byfJBrR32J2r07r5u3KA2jK0uRy4IZJW5yc-7s/rs:fit:1200:628:1/g:ce/wm:1:soea:12:12:0.12/M2Q2MTI1OWMtOGNmZS00MzQ3LTlmNDEtM2NmZWNlNWUyYzdmLmpwZw.jpg',
        ]);
        Branch::create([
            'branch_name' => 'Branch 3',
            'address' => '789 Oak Street',
            'image' => 'https://example.com/image3.jpg', // Replace with your image URL
        ]);

        Branch::create([
            'branch_name' => 'Branch 4',
            'address' => '101 Pine Street',
            'image' => 'https://example.com/image4.jpg', // Replace with your image URL
        ]);
    }
}
