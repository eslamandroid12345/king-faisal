<?php

namespace Database\Seeders;

use App\Models\ChairmanOfTheBoard;
use App\Models\ChairmanOfTheBoardNew;
use Illuminate\Database\Seeder;

class ChairmanOfTheBoardNewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1 ; $i <= 8 ; $i++){

            $chairmanOfTheBoardNew = new ChairmanOfTheBoardNew();
            $chairmanOfTheBoardNew->background_image = "storage/about_center/chairman_of_the_board_news/images/".$i.".png";
            $chairmanOfTheBoardNew->save();
            $chairmanOfTheBoardNew->translateOrNew("ar")->title = "ألقى صاحب السمو الملكي الأمير تركي الفيصل كلمة بعنوان الحقيقة والعواقب في معهد بيكر للسياسات العامة";
            $chairmanOfTheBoardNew->translateOrNew("en")->title = "His Royal Highness Prince Turki Al Faisal delivered a speech entitled Truth and Consequences at the Baker Institute for Public Policy";
            $chairmanOfTheBoardNew->translateOrNew("ch")->title = "圖爾基費薩爾親王殿下在貝克公共政策研究所發表題為《真相與後果》的演講";
            $chairmanOfTheBoardNew->translateOrNew("ar")->description = "ألقى صاحب السمو الملكي الأمير تركي الفيصل كلمة بعنوان الحقيقة والعواقب في معهد بيكر للسياسات العامة";
            $chairmanOfTheBoardNew->translateOrNew("en")->description = "His Royal Highness Prince Turki Al Faisal delivered a speech entitled Truth and Consequences at the Baker Institute for Public Policy";
            $chairmanOfTheBoardNew->translateOrNew("ch")->description = "圖爾基費薩爾親王殿下在貝克公共政策研究所發表題為《真相與後果》的演講";
            $chairmanOfTheBoardNew->save();
        }
    }
}
