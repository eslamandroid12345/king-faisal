<?php

namespace Database\Seeders;

use App\Models\AboutChairmanOfTheBoard;
use Illuminate\Database\Seeder;

class AwardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1 ; $i <= 3 ; $i++){

            $aboutChairmanOfTheBoard = new AboutChairmanOfTheBoard();
            $aboutChairmanOfTheBoard->type = "award";
            $aboutChairmanOfTheBoard->save();
            $aboutChairmanOfTheBoard->translateOrNew("ar")->title = "عام 1438هـ/2017م";
            $aboutChairmanOfTheBoard->translateOrNew("en")->title = "Year 1438 AH/2017 AD";
            $aboutChairmanOfTheBoard->translateOrNew("ch")->title = "伊斯蘭曆 1438 年/西元 2017 年";
            $aboutChairmanOfTheBoard->translateOrNew("ar")->description = "حصل سموه على أرفع وسام شرف في أفغانستان؛ وسام غازي مير باشا خان.";
            $aboutChairmanOfTheBoard->translateOrNew("en")->description = "His Highness received the highest medal of honor in Afghanistan; Medal of Ghazi Mir Pasha Khan.";
            $aboutChairmanOfTheBoard->translateOrNew("ch")->description = "殿下獲得哈薩克共和國阿斯塔納古米廖夫國立歐亞大學榮譽博士學位。";
            $aboutChairmanOfTheBoard->save();

        }
    }
}
