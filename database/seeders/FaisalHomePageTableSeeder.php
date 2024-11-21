<?php

namespace Database\Seeders;

use App\Models\FaisalHomePage;
use Illuminate\Database\Seeder;

class FaisalHomePageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1 ;$i <= 8 ; $i++){

            $document = new FaisalHomePage();
            $document->type = "document";
            $document->image = "storage/faisal_home_pages/document_images/".$i.".png";
            $document->save();
            $document->translateOrNew("ar")->description = "الأمير فيصل يبعث الى والده الملك عبدالعزيز بخطاب يتضمن اطلاعه على آخر المستجدات، ويدعو له بالنصر والتمكين.";
            $document->translateOrNew("en")->description = "Prince Faisal sends a letter to his father, King Abdulaziz, informing him of the latest developments and praying for his victory and empowerment.";
            $document->translateOrNew("ch")->description = "費薩爾王子致信他的父親阿卜杜勒阿齊茲國王，向他通報最新進展，並祈禱他的勝利和賦權。";
            $document->save();

        }


        for ($i = 1 ;$i <= 8 ; $i++) {

            $image = new FaisalHomePage();
            $image->type = "image";
            $image->image = "storage/faisal_home_pages/images/" . $i . ".png";
            $image->save();
            $image->translateOrNew("ar")->title = "(1394 هـ / 1974 م).";
            $image->translateOrNew("en")->title = "(1394 AH / 1974 AD).";
            $image->translateOrNew("ch")->title = "（伊斯蘭歷 1394 年/西元 1974 年）。";
            $image->translateOrNew("ar")->description = "الملك فيصل بن عبد العزيز رحمه الله يفتتح مصنع الأسلحة في الخرج.";
            $image->translateOrNew("en")->description = "King Faisal bin Abdulaziz, may God have mercy on him, inaugurates the weapons factory in Al-Kharj.";
            $image->translateOrNew("ch")->description = "國王費薩爾·本·阿卜杜勒阿齊茲（願上帝憐憫他）為阿爾卡吉的武器工廠揭幕。";
            $image->save();

        }


        for ($i = 1 ;$i <= 8 ; $i++) {

            $video = new FaisalHomePage();
            $video->type = "video";
            $video->video_url = "https://www.youtube.com/watch?v=BdXs0i7WmvE";
            $video->image = "storage/faisal_home_pages/video_images/" . $i . ".png";
            $video->save();
            $video->translateOrNew("ar")->title = "(1394 هـ / 1974 م).";
            $video->translateOrNew("en")->title = "(1394 AH / 1974 AD).";
            $video->translateOrNew("ch")->title = "（伊斯蘭歷 1394 年/西元 1974 年）。";
            $video->translateOrNew("ar")->description = "استقبال الجماهير التونسية للملك فيصل اثناء زيارته الى تونس";
            $video->translateOrNew("en")->description = "Tunisian fans welcome King Faisal during his visit to Tunisia";
            $video->translateOrNew("ch")->description = "突尼斯球迷歡迎費薩爾國王訪問突尼斯";
            $video->save();


        }



        for ($i = 1 ;$i <= 8 ; $i++) {

            $sound = new FaisalHomePage();
            $sound->type = "sound";
            $sound->sound_url = "https://soundcloud.com/user-740371596";
            $sound->image = "storage/faisal_home_pages/sound_images/" . $i . ".png";
            $sound->save();
            $sound->translateOrNew("ar")->title = "شاهد المواد الصوتية على موقع ساوند كلاود";
            $sound->translateOrNew("en")->title = "Watch podcasts on SoundCloud";
            $sound->translateOrNew("ch")->title = "在 SoundCloud 上觀看播客";
            $sound->save();



        }


    }
}
