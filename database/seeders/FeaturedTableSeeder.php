<?php

namespace Database\Seeders;

use App\Models\Featured;
use Illuminate\Database\Seeder;

class FeaturedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Featured::create([
            'featured_discription'=>"If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything",
        ]);
    }
}
