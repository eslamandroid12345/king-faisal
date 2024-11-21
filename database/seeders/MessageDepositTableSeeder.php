<?php

namespace Database\Seeders;

use App\Models\MessageDeposit;
use Illuminate\Database\Seeder;

class MessageDepositTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1 ; $i <= 10 ; $i++){

            MessageDeposit::create([

              'full_name' => 'User'.$i,
              'phone' => '+966 56 530 979'.$i,
              'email' => 'user'.$i.'@gmail.com',
              'attachments' => 'storage/message_deposits/attachments/'.$i.'.pdf',
              'user_id' => $i,

            ]);
        }
    }
}
