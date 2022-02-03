<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Seeder;

class BannerTableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Banner::create([
            'banner_name'=> ' Beard Care',
            'banner_description'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio omnis fugit, sed tempora praesentium commodi error, hic recusandae repudiandae neque ad molestias, atque veritatis labore quae eveniet autem in',
            'banner_link'=>'https://laravel.com/',
        ]);
        Banner::create([
            'banner_name'=> ' Beard Care',
            'banner_description'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio omnis fugit, sed tempora praesentium commodi error, hic recusandae repudiandae neque ad molestias, atque veritatis labore quae eveniet autem in',
            'banner_link'=>'https://laravel.com/',
        ]);
        Banner::create([
            'banner_name'=> ' Beard Care',
            'banner_description'=>' Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio omnis fugit, sed tempora praesentium commodi error, hic recusandae repudiandae neque ad molestias, atque veritatis labore quae eveniet autem in',
            'banner_link'=>'https://laravel.com/',
        ]);

    }
}
