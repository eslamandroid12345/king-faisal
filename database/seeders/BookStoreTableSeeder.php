<?php

namespace Database\Seeders;

use App\Models\BookStore;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookStoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for ($i = 0 ; $i <= 40 ; $i++){

            BookStore::create([
                'book_type' => $i <= 20 ? 'soft_copy' : 'hard_copy',
                'published_year' => '2000',
                'background_image' => 'storage/books/images/book.png',
                'price' => rand(40,300),
                'printing_number' => 1,
                'book_category_id' => $i <= 20 ? 1 : 2,
                'author_id' => $i <= 20 ? 1 : 2,
                ]
            );
        }


    }
}
