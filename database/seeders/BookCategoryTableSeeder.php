<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Seeder;

class BookCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       $bookCategory = new BookCategory();
       $bookCategory->save();
       $bookCategory->translateOrNew("ar")->name = "الكتب العربيه";
       $bookCategory->translateOrNew("en")->name = "Arabic Books";
       $bookCategory->translateOrNew("ch")->name = "英語書籍";
       $bookCategory->save();


       $bookCategory = new BookCategory();
       $bookCategory->save();
       $bookCategory->translateOrNew("ar")->name = "الكتب الانجليزيه";
       $bookCategory->translateOrNew("en")->name = "English Books";
       $bookCategory->translateOrNew("ch")->name = "英語書籍";
       $bookCategory->save();

    }
}
