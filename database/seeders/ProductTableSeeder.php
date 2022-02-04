<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        'product_image'=>'p1.png',
        'product_name'=>' Beard Oil',
        'product_newprise'=>' 40$',
        'product_oldprise'=>'45$',
        'product_buy'=>'https://laravel.com/'
        ]);

        Product::create([
        'product_image'=>'p2.png',
        'product_name'=>' Beard Oil',
        'product_newprise'=>' 40$',
        'product_oldprise'=>'45$',
        'product_buy'=>'https://laravel.com/'
        ]);

        Product::create([
        'product_image'=>'p3.png',
        'product_name'=>' Beard Oil',
        'product_newprise'=>' 40$',
        'product_oldprise'=>'45$',
        'product_buy'=>'https://laravel.com/'
        ]);

        Product::create([
        'product_image'=>'p4.png',
        'product_name'=>' Beard Oil',
        'product_newprise'=>' 40$',
        'product_oldprise'=>'45$',
        'product_buy'=>'https://laravel.com/'
        ]);
    }
}
