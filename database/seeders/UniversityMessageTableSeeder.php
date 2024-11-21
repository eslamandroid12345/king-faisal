<?php

namespace Database\Seeders;

use App\Models\UniversityMessage;
use Illuminate\Database\Seeder;

class UniversityMessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    

        for($i = 1 ; $i <= 10 ; $i++){

            UniversityMessage::create([

              'full_name' => 'User'.$i,
              'phone' => '+966 56 530 979'.$i,
              'email' => 'user'.$i.'@gmail.com',
              'university' => 'university'.$i,
              'college' => 'college'.$i,
              'department' => 'cs',
              'subject' => 'Data Strucure',
              'level' => 'Master',
              'attachments' => 'storage/university_messages/attachments/'.$i.'.pdf',
              'user_id' => $i,

            ]);
        }
    }
}
