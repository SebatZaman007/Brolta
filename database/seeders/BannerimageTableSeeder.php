<?php

namespace Database\Seeders;

use App\Models\Bannerimage;
use Illuminate\Database\Seeder;

class BannerimageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bannerimage::create([
            'banner_image'=> 'hero-bg.jpg',
        ]);
    }
}
