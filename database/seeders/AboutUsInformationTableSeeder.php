<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Seeder;

class AboutUsInformationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about_us_information = new AboutUs();
        $about_us_information->image = 'storage/about_us_informations/images/about_us.png';
        $about_us_information->save();
        $about_us_information->translateOrNew("ar")->header = "نحن نريد أن تكون هذه المملكة، الآن وبعد خمسين سنة من الآن، إن شاء الله، مصدر إشعاع للإنسانية والسلام";
        $about_us_information->translateOrNew("en")->header = "We want this Kingdom, now and fifty years from now, God willing, to be a source of radiance for humanity and peace";
        $about_us_information->translateOrNew("ch")->header = "如果上帝願意，我們希望這個王國現在和五十年後成為人類與和平的光輝之源";
        $about_us_information->translateOrNew("ar")->title = "الملك فيصل بن عبدالعزيز آل سعود (1395هـ/1975م)";
        $about_us_information->translateOrNew("en")->title = "King Faisal bin Abdulaziz Al Saud (1395 AH / 1975 AD)";
        $about_us_information->translateOrNew("ch")->title = "費薩爾·本·阿卜杜勒阿齊茲·阿勒沙特國王（伊斯蘭歷 1395 年 / 西元 1975 年）";
        $about_us_information->translateOrNew("ar")->description = "في عام 1403هـ/1983م، بعد ثماني سنوات من استشهاد الملك فيصل –رحمه الله– أسست مؤسسة الملك فيصل الخيرية مركز الملك فيصل للبحوث والدراسات الإسلامية، بهدف مواصلة الرسالة السامية للملك الراحل لنقل المعرفة بين المملكة العربية السعودية وبقية العالم. منذ ذلك الحين، أصبح المركز منارةً للبحث والعلم والثقافة.";
        $about_us_information->translateOrNew("en")->description = "In the year 1403 AH/1983 AD, eight years after the martyrdom of King Faisal - may God have mercy on him - the King Faisal Charitable Foundation established the King Faisal Center for Research and Islamic Studies, with the aim of continuing the late king’s noble mission to transfer knowledge between the Kingdom of Saudi Arabia and the rest of the world. Since then, the center has become a beacon of research, science and culture.";
        $about_us_information->translateOrNew("ch")->description = "伊斯蘭歷1403 年/西元1983 年，費薩爾國王殉難八年後（願上帝憐憫他），費薩爾國王慈善基金會成立了費薩爾國王研究和伊斯蘭研究中心，旨在延續已故國王的貴族精神。使命是在沙烏地阿拉伯王國和世界其他地區之間傳播知識。 從那時起，該中心已成為研究、科學和文化的燈塔。";
        $about_us_information->save();
    }
}
