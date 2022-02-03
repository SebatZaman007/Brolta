<?php

namespace Database\Seeders;

use App\Models\Mainlogo;
use Illuminate\Database\Seeder;

class LogoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mainlogo::create([
            'logo_name'=>'Brolta',
            'logo_image' => 'hero-bg.jpg',
        ]);
    }
}
