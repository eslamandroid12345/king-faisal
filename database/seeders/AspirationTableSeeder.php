<?php

namespace Database\Seeders;

use App\Models\Aspiration;
use App\Models\Entity;
use Illuminate\Database\Seeder;

class AspirationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $aspiration = new Aspiration();
        $aspiration->type = 'vision';
        $aspiration->icon = 'storage/visions/images/vision.png';
        $aspiration->save();
        $aspiration->translateOrNew("ar")->title = "الرؤيه";
        $aspiration->translateOrNew("en")->title = "Vision";
        $aspiration->translateOrNew("ch")->title = "想像";
        $aspiration->translateOrNew("ar")->description = "أن نكون نبعًا إنسانيًّا للمعرفة العلمية والفكرية والثقافية.";
        $aspiration->translateOrNew("en")->description = "To be a humanitarian source of scientific, intellectual and cultural knowledge.";
        $aspiration->translateOrNew("ch")->description = "成為科學、知識和文化知識的人道主義來源。";
        $aspiration->save();


        $aspiration = new Aspiration();
        $aspiration->type = 'message';
        $aspiration->icon = 'storage/messages/images/message.png';
        $aspiration->save();
        $aspiration->translateOrNew("ar")->title = "الرساله";
        $aspiration->translateOrNew("en")->title = "Message";
        $aspiration->translateOrNew("ch")->title = "想像";
        $aspiration->translateOrNew("ar")->description = "إثراء المشهدين العلمي والثقافي محليًّا وعالميًّا ببحوث أصيلة وموارد مميزة وخبرات فريدة.";
        $aspiration->translateOrNew("en")->description = "Enriching the scientific and cultural scenes locally and globally with original research, distinguished resources, and unique experiences.";
        $aspiration->translateOrNew("ch")->description = "成為科學、知識和文化知識的人道主義來源。";
        $aspiration->save();


        $aspiration = new Aspiration();
        $aspiration->type = 'value';
        $aspiration->icon = 'storage/values/images/value.png';
        $aspiration->save();
        $aspiration->translateOrNew("ar")->title = "القيم";
        $aspiration->translateOrNew("en")->title = "Values";
        $aspiration->translateOrNew("ch")->title = "想像";
        $aspiration->translateOrNew("ar")->description = "نشر المعرفة – تمكين البحث العلمي – حفظ التراث الإنساني";
        $aspiration->translateOrNew("en")->description = "Disseminating knowledge - enabling scientific research - preserving human heritage";
        $aspiration->translateOrNew("ch")->description = "傳播知識 - 促進科學研究 - 保護人類遺產";
        $aspiration->save();





    }
}
