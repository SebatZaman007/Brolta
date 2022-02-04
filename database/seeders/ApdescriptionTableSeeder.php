<?php

namespace Database\Seeders;

use App\Models\Apdescription;
use Illuminate\Database\Seeder;

class ApdescriptionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Apdescription::create([
            'apdescription'=>"If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything"
        ]);
    }
}
