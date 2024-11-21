<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
              [
               'full_name' => 'Islam Mohamed',
               'email' => 'eslam@gmail.com',
               'password' => Hash::make('123456'),
               'phone' => "01062098622",
               'privacy_and_policy' => 1,
               'created_at' => now(),
               'updated_at' => now(),

              ],
            [
                'full_name' => 'Islam Ragab',
                'email' => 'eslam1@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => "01062098623",
                'privacy_and_policy' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],


            [
                'full_name' => 'Ali Mohamed',
                'email' => 'ali@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => "01062098624",
                'privacy_and_policy' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],


            [
                'full_name' => 'Gamal Mohamed',
                'email' => 'gamal@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => "01062098625",
                'privacy_and_policy' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],



            [
                'full_name' => 'Adel Mohamed',
                'email' => 'adel@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => "01062098626",
                'privacy_and_policy' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],


            [
                'full_name' => 'Shady Saleh',
                'email' => 'shady@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => "01062098627",
                'privacy_and_policy' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],


            [
                'full_name' => 'Amir Ali',
                'email' => 'amir@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => "01062098628",
                'privacy_and_policy' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],


            [
                'full_name' => 'Radwa Gamal',
                'email' => 'radwa123@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => "01062098629",
                'privacy_and_policy' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],


            [
                'full_name' => 'Ahmed Sayed',
                'email' => 'ahmed123@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => "01062098610",
                'privacy_and_policy' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],


            [
                'full_name' => 'Bebo Ali',
                'email' => 'bebo@gmail.com',
                'password' => Hash::make('123456'),
                'phone' => "01062098611",
                'privacy_and_policy' => 1,
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ]);
    }
}
