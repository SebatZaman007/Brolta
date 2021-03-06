<?php

namespace Database\Seeders;

use App\Http\Controllers\Admin\SocialmediaController;
use App\Models\Socialmedia;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(LogoTableSeeder::class);
        $this->call(BannerimageTableSeeder::class);
        $this->call(BannerTableseeder::class);
        $this->call(FeaturedTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(AboutTableSeeder::class);
        $this->call(ApdescriptionTableSeeder::class);
        $this->call(AllproductTableSeeder::class);
        $this->call(ContactTableSeeder::class);
        $this->call(ClientTableSeeder::class);
        $this->call(FooterleftTableSeeder::class);
        $this->call(ContactusTableSeeder::class);
        $this->call(SocialmediaTableSeeder::class);


    }
}
