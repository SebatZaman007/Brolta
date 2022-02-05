<?php

namespace Database\Seeders;

use App\Models\Contactus;
use Illuminate\Database\Seeder;

class ContactusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contactus::create([
        'contactus_location'=>'https://www.google.com.bd/maps/@22.7980283,89.5591951,15z?hl=en&authuser=0',
        'contactus_phonenumber'=>'+01 123455678990',
        'contactus_email'=>'demo@gmail.com'
        ]);
    }
}
