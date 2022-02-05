<?php

namespace Database\Seeders;

use App\Models\Socialmedia;
use Illuminate\Database\Seeder;

class SocialmediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Socialmedia::create([
            'socialmedia_icon'=>'fa fa-facebook',
            'socialmedia_link'=>'https://laravel.com/',
        ]);
        Socialmedia::create([
            'socialmedia_icon'=>'fa fa-twitter',
            'socialmedia_link'=>'https://laravel.com/',
        ]);
        Socialmedia::create([
            'socialmedia_icon'=>'fa fa-linkedin',
            'socialmedia_link'=>'https://laravel.com/',
        ]);
        Socialmedia::create([
            'socialmedia_icon'=>'fa fa-instagram',
            'socialmedia_link'=>'https://laravel.com/',
        ]);

    }

}
