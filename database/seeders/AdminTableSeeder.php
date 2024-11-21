<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('admins')->insert([

            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'admin1',
                'email' => 'admin1@admin.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'name' => 'admin2',
                'email' => 'admin2@admin.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'name' => 'admin3',
                'email' => 'admin3@admin.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'admin4',
                'email' => 'admin4@admin.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'admin5',
                'email' => 'admin5@admin.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'name' => 'admin6',
                'email' => 'admin6@admin.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'name' => 'admin7',
                'email' => 'admin7@admin.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'name' => 'admin8',
                'email' => 'admin8@admin.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'name' => 'admin9',
                'email' => 'admin9@admin.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],


            [
                'name' => 'admin10',
                'email' => 'admin10@admin.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'admin11',
                'email' => 'admin11@admin.com',
                'password' => Hash::make('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],


        ]);
    }
}
