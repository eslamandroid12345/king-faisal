<?php

namespace Database\Seeders;

use App\Models\AboutChairmanOfTheBoard;
use App\Models\ChairmanOfTheBoard;
use Illuminate\Database\Seeder;

class ChairmanOfTheBoardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


            $chairmanOfTheBoard = new ChairmanOfTheBoard();
            $chairmanOfTheBoard->background_image = "storage/about_center/chairman_of_the_board/images/1.png";
            $chairmanOfTheBoard->save();
            $chairmanOfTheBoard->translateOrNew("ar")->title = "صاحب السمو الملكي الأمير تركي الفيصل بن عبد العزيز آل سعود";
            $chairmanOfTheBoard->translateOrNew("en")->title = "His Royal Highness Prince Turki Al-Faisal bin Abdulaziz Al Saud";
            $chairmanOfTheBoard->translateOrNew("ch")->title = "圖爾基·費薩爾·本·阿卜杜勒阿齊茲·阿勒沙特親王殿下";
            $chairmanOfTheBoard->translateOrNew("ar")->description = "صاحب السمو الملكي الأمير تركي الفيصل مؤسس وعضو مجلس أمناء مؤسسة الملك فيصل، ورئيس مجلس إدارة مركز الملك فيصل للبحوث والدراسات الإسلامية. وُلد سموه في الثالث من ربيع الأول 1364هـ/الموافق الخامس عشر من فبراير 1945م، في مكة المكرمة بالمملكة العربية السعودية. وقد بدأ سموه دراسته في المدرسة النموذجية في الطائف، ثم أكمل دراسته الثانوية في مدرسة لورانسفيل في نيو جيرسي، الولايات المتحدة الأمريكية، وأتم دراسته في جامعة جورج تاون. عُيّن سموه مستشاراً في الديوان الملكي في عام 1393هـ/1973م. وفي عام 1397هـ/1977م عُيّن رئيساً للاستخبارات العامة، وهي الجهاز الرئيس الذي يُعنى بالاستخبارات الخارجية في المملكة العربية السعودية، بمرتبة وزير، وقد شغل سموه هذا المنصب حتى 1422هـ/2001م. وفي 1423هـ/2002م، عُيّن سموه سفيراً للمملكة العربية السعودية لدى المملكة المتحدة وجمهورية أيرلندا، وشغل هذا المنصب حتى 1426هـ/2005م، عندما عُيّن سفيراً لدى الولايات المتحدة الأمريكية، وتقاعد سموه في 1428هـ/2007م.";
            $chairmanOfTheBoard->translateOrNew("en")->description = "His Royal Highness Prince Turki Al-Faisal is founder and member of the Board of Trustees of the King Faisal Foundation, and Chairman of the Board of Directors of the King Faisal Center for Research and Islamic Studies. His Highness was born on the third of Rabi’ al-Awwal 1364 AH / corresponding to the fifteenth of February 1945 AD, in Mecca, the Kingdom of Saudi Arabia. His Highness began his studies at the Model School in Taif, then completed his secondary studies at Lawrenceville School in New Jersey, USA, and completed his studies at Georgetown University. His Highness was appointed Advisor to the Royal Court in 1393 AH/1973 AD. In 1397 AH/1977 AD, he was appointed head of General Intelligence, the main agency responsible for foreign intelligence in the Kingdom of Saudi Arabia, with the rank of minister. His Highness held this position until 1422 AH/2001 AD. In 1423 AH/2002 AD, His Highness was appointed Ambassador of the Kingdom of Saudi Arabia to the United Kingdom and the Republic of Ireland, and he held this position until 1426 AH/2005 AD, when he was appointed Ambassador to the United States of America, and His Highness retired in 1428 AH/2007 AD.";
            $chairmanOfTheBoard->translateOrNew("ch")->description = "圖爾基·費薩爾親王殿下是費薩爾國王基金會的創始人和董事會成員，也是費薩爾國王研究和伊斯蘭研究中心的董事會主席。 殿下於伊斯蘭歷 1364 年拉比奧瓦爾三號（相當於西元 1945 年 2 月 15 日）出生於沙烏地阿拉伯王國麥加。 殿下在塔伊夫模範學校開始學習，隨後在美國新澤西州勞倫斯維爾學校完成中學學業，最後在喬治城大學完成學業。 伊斯蘭歷 1393 年/西元 1973 年，殿下被任命為皇家宮廷顧問。 伊斯蘭歷1397 年/西元1977 年，他被任命為沙烏地阿拉伯王國負責外國情報的主要機構－情報總局的負責人，並擔任部長級職務。殿下一直擔任這一職位，直到伊斯蘭歷1422 年/西元2001 年。 伊斯蘭歷 1423 年/西元 2002 年，殿下被任命為沙烏地阿拉伯王國駐英國和愛爾蘭共和國大使，並一直擔任這一職務直至公元 1426 年/公元 2005 年，他被任命為駐美國大使美國，殿下於伊斯蘭歷1428 年/西元2007 年退休。";
            $chairmanOfTheBoard->save();


    }
}
