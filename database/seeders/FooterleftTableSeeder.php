<?php

namespace Database\Seeders;

use App\Models\Footerleft;
use Illuminate\Database\Seeder;

class FooterleftTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Footerleft::create([
          'footer_link' =>'https://laravel.com/',
          'footer_description'=>'Exercitationem nisi voluptates mollitia suscipit voluptate minus facere, temporibus placeat ratione porro! Laboriosam esse ab cupiditate qui vel blanditiis, molestias, eaque natus aspernatur ipsam quasi id eos sapiente ducimus non!'
      ]);
    }
}
