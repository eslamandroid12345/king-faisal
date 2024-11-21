<?php

namespace Database\Seeders;

use App\Models\Management;
use App\Models\RolesAroundTheWorld;
use Illuminate\Database\Seeder;

class ManagementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for ($i = 1 ; $i <= 20 ; $i++){

            $management = new Management();
            $management->name = "محمد السبيطلي";
            $management->background_image = "storage/about_center/managements/images/".$i.".png";
            $management->save();
            $management->translateOrNew("ar")->role = "مدير إدارة تقنية المعلومات";
            $management->translateOrNew("en")->role = "Director of Information Technology Department";
            $management->translateOrNew("ch")->role = "資訊科技部主任";
            $management->translateOrNew("ar")->description = "صاحبة السمو الملكي الأميرة مها بنت محمد الفيصل، الأمين العام لمركز الملك فيصل للبحوث والدراسات الإسلامية منذ أغسطس ٢٠٢٢م، وقد التحقت سموها بالمركز في عام ٢٠١١م. شغلت سابقًا منصب مستشارة سمو رئيس مجلس الإدارة في المدة من (٢٠١٦– ٢٠٢٢م) ونائب الأمين العام والمشرفة العامة على إدارة البحوث في المدة من (٢٠١٣ – ٢٠١٦م) ومديرة دارة آل فيصل ومساعدة الأمين العام للشؤون العلمية في المدة من (٢٠١١ – ٢٠١٣م). حاصلة على درجة البكالوريوس في علم الاجتماع من جامعة الملك عبد العزيز. لسموها نشاط ثقافي حافل، وقد نشرت عددًا من الأعمال الإبداعية في مجال الرواية والكتابة للأطفال.";
            $management->translateOrNew("en")->description = "Her Royal Highness Princess Maha bint Muhammad Al-Faisal has been Secretary-General of the King Faisal Center for Research and Islamic Studies since August 2022. Her Highness joined the Center in 2011. She previously held the position of Advisor to His Highness the Chairman of the Board of Directors from (2016 - 2022 AD), Deputy Secretary-General and General Supervisor of the Research Department from (2013 - 2016 AD), and Director of Al Faisal House and Assistant to the Secretary-General for Scientific Affairs from (2011 - 2013 AD). She holds a bachelor’s degree in sociology from King Abdulaziz University. Her Highness is active in cultural activities and has published a number of creative works in the field of novels and writing for children.";
            $management->translateOrNew("ch")->description = "瑪哈·賓特·穆罕默德·費薩爾公主殿下自 2022 年 8 月起擔任費薩爾國王研究和伊斯蘭研究中心秘書長。殿下於 2011 年加入該中心。 她曾擔任董事會主席殿下顧問（西元2016年至2022年）、研究部副秘書長兼總監事（西元2013年至2016年）以及Al Faisal House董事2011 年至 2013 年擔任科學事務秘書長助理。 她擁有阿卜杜勒阿齊茲國王大學社會學學士學位。 殿下活躍於文化活動，在小說和兒童寫作領域出版了多部創作作品。";
            $management->save();

        }
    }
}
