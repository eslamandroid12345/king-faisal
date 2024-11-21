<?php

namespace Database\Seeders;

use App\Models\EntityVisitor;
use Illuminate\Database\Seeder;

class EntityVisitorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1 ; $i < 16 ; $i++){


            for ($j = 1 ; $j <= 4 ; $j++){

                EntityVisitor::create([

                    'full_name' => 'user'.$i,
                    'email' => 'user'.$i.'@gmail.com',
                    'visit_date' => '2024-01-10',
                    'entity_id' => $j,
                ]);
            }

        }
    }
}
