<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Seeder;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'contact_name'=>'admin',
            'contact_phonenumber'=>'1234567890',
            'contact_email'=>'admin@admin.com',
            'contact_message'=>'hello world'
        ]);
    }
}
