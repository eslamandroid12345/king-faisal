<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\EntityVisitor;
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
        for ($i = 1 ; $i < 16 ; $i++){

            Contact::create([
                'full_name' => 'user'.$i,
                'email' => 'user'.$i.'@gmail.com',
                'subject' => 'subject'.$i,
                'message' => 'message'.$i,
            ]);

        }
    }
}
