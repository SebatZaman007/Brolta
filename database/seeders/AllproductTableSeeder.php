<?php

namespace Database\Seeders;

use App\Models\Allproduct;
use Illuminate\Database\Seeder;

class AllproductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Allproduct::create([
        'allproduct_image'=>'p1.png',
        'allproduct_name'=>'Beard Oil',
        'allproduct_newprice'=>'40$',
        'allproduct_oldprice'=>'45$',
        'allproduct_seemore'=>'https://laravel.com/',
        ]);

        Allproduct::create([
        'allproduct_image'=>'p2.png',
        'allproduct_name'=>'Beard Oil',
        'allproduct_newprice'=>'40$',
        'allproduct_oldprice'=>'45$',
        'allproduct_seemore'=>'https://laravel.com/',
        ]);

        Allproduct::create([
        'allproduct_image'=>'p3.png',
        'allproduct_name'=>'Beard Oil',
        'allproduct_newprice'=>'40$',
        'allproduct_oldprice'=>'45$',
        'allproduct_seemore'=>'https://laravel.com/',
        ]);

        Allproduct::create([
        'allproduct_image'=>'p4.png',
        'allproduct_name'=>'Beard Oil',
        'allproduct_newprice'=>'40$',
        'allproduct_oldprice'=>'45$',
        'allproduct_seemore'=>'https://laravel.com/',
        ]);

    }
}
