<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    /*
     $data = [
     'author' => 'Gummibeer',
     'en' => ['title' => 'My first post'],
     'fr' => ['title' => 'Mon premier post'],
      ];
     $post = Post::create($data);
     echo $post->translate('fr')->title; // Mon premier post
     */


    /*
     'name_ar' => 'الرياض',
                'name_en' => 'Riyadh',
                'name_ch' => '英語書籍',

    'name_ar' => 'القصيم',
                'name_en' => 'Al-Qassim',
                'name_ch' => '英語書籍',

    'name_ar' => 'المدينه المنوره',
                'name_en' => 'AL Madinah AL Munawwarah',
                'name_ch' => '英語書籍',

     */
    public function run()
    {


        $city = new City();
        $city->save();
        $city->translateOrNew("ar")->name = "القصيم";
        $city->translateOrNew("en")->name = "Al-Qassim";
        $city->translateOrNew("ch")->name = "英語書籍";
        $city->save();




        $city = new City();
        $city->save();
        $city->translateOrNew("ar")->name = "المدينه المنوره";
        $city->translateOrNew("en")->name = "AL Madinah AL Munawwarah";
        $city->translateOrNew("ch")->name = "英語書籍";
        $city->save();



        $city = new City();
        $city->save();
        $city->translateOrNew("ar")->name = "القصيم";
        $city->translateOrNew("en")->name = "Al-Qassim";
        $city->translateOrNew("ch")->name = "英語書籍";
        $city->save();



    }
}
