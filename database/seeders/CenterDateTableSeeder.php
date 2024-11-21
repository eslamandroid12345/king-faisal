<?php

namespace Database\Seeders;

use App\Models\AboutChairmanOfTheBoard;
use Illuminate\Database\Seeder;

class CenterDateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1 ; $i <= 4 ; $i++){

            $aboutChairmanOfTheBoard = new AboutChairmanOfTheBoard();
            $aboutChairmanOfTheBoard->type = "center_date";
            $aboutChairmanOfTheBoard->save();
            $aboutChairmanOfTheBoard->translateOrNew("ar")->title = "١٣٩٦هـ/١٩٧٦م:";
            $aboutChairmanOfTheBoard->translateOrNew("en")->title = "1396 AH/1976 AD:";
            $aboutChairmanOfTheBoard->translateOrNew("ch")->title = "伊斯蘭曆 1438 年/西元 2017 年";
            $aboutChairmanOfTheBoard->translateOrNew("ar")->description = "أبرمت الاتفاقية بين مؤسسة الملك فيصل الخيرية ومنظمة الأمم المتحدة للتربية والعلوم والثقافية (اليونيسكو) لتأسيس مركز بحوث به مكتبة.";
            $aboutChairmanOfTheBoard->translateOrNew("en")->description = "The agreement was concluded between the King Faisal Charitable Foundation and the United Nations Educational, Scientific and Cultural Organization (UNESCO) to establish a research center with a library.";
            $aboutChairmanOfTheBoard->translateOrNew("ch")->description = "殿下獲得哈薩克共和國阿斯塔納古米廖夫國立歐亞大學榮譽博士學位。";
            $aboutChairmanOfTheBoard->save();

        }
    }
}
