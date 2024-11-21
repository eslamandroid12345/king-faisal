<?php

namespace Database\Seeders;

use App\Models\MediaCenterDepartment;
use App\Models\Page;
use Illuminate\Database\Seeder;

class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {

        $titlesAr = [
            'نبذة عن إدارة البحوث',
            'المروية العربية',
            'برنامج الباحث الزائر',
            'برنامج الدراسات الإجتماعية',
            'برنامج الدراسات الأفريقية',
            'برنامج الدراسات الآسيوية',

        ];

        $titlesEn = [
            'About research management',
            'Arabic Meroitic',
            'Visiting Researcher Programme',
            'Social Studies Programme',
            'African Studies Programme',
            'Asian Studies Programme',

        ];


        $titlesCh = [
            '關於研究管理',
            '阿拉伯梅羅伊特語',
            '訪問研究員計',
            '社會研究計',
             '非洲研究計畫',
             '亞洲研究計劃',
        ];

        for ($i = 0 ; $i <= 5; $i++){

            $research_page = new Page();
            $research_page->category = $i <= 2 ? "research_page" : "research_program";
            $research_page->save();
            $research_page->translateOrNew("ar")->title =  $titlesAr[$i];
            $research_page->translateOrNew("en")->title = $titlesEn[$i];
            $research_page->translateOrNew("ch")->title = $titlesCh[$i];
            $research_page->save();
        }


    }
}
