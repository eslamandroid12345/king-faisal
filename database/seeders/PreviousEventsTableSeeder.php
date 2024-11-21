<?php

namespace Database\Seeders;

use App\Models\MediaCenterDepartment;
use Illuminate\Database\Seeder;

class PreviousEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ################# الفعليات السابقه ##########3
        for ($i = 1 ; $i <= 16 ; $i++){

            $mediaDepartmentCenter = new MediaCenterDepartment();
            $mediaDepartmentCenter->image_url = "storage/media_center_departments/images/previous_events/".$i.".png";
            $mediaDepartmentCenter->type = "previous_events";
            $mediaDepartmentCenter->save();
            $mediaDepartmentCenter->translateOrNew("ar")->title =  "حلقة نقاش عامة: عوالم الإسلام في آسيا: ألف عام من التبادل التاريخي";
            $mediaDepartmentCenter->translateOrNew("en")->title = "General Panel Discussion: The Realms of Islam in Asia: A Thousand Years of Historical Exchange";
            $mediaDepartmentCenter->translateOrNew("ch")->title = "一般小組討論：亞洲伊斯蘭領域：一千年的歷史交流";
            $mediaDepartmentCenter->translateOrNew("ar")->description =  "استقبلت صاحبة السمو الملكي الأميرة مها بنت محمد الفيصل، الأمين العام لـ لمركز الملك فيصل للبحوث والدراسات الإسلامية، يوم الأربعاء، ١ جمادى الأولى ١٤٤٥هـ الموافق ١٥ يونيو نوفمبر ٢٠٢٣م‬⁩، الرئيس التنفيذي للتسويق والتواصل بمجموعة روشن، الأستاذة غادة الرميان، وذلك بحضور صاحبة السمو الملكي الأميرة هيفاء الفيصل، عضو مجلس أمناء مؤسسة الملك فيصل الخيرية. كما زارت معرض ⁧‫أسفار‬⁩ المقام في متحف الفيصل للفن العربي الإسلامي.";
            $mediaDepartmentCenter->translateOrNew("en")->description =  "On Wednesday, Jumada Al-Awwal 1, 1445 AH, corresponding to June 15, 2023 AD, Her Royal Highness Princess Maha bint Muhammad Al-Faisal, Secretary-General of the King Faisal Center for Research and Islamic Studies, received the Chief Marketing and Communications Officer of the Roshan Group, Professor Ghada Al-Rumayyan, in the presence of Her Highness. Royal Princess Haifa Al-Faisal, member of the Board of Trustees of the King Faisal Charitable Foundation. She also visited the Travels exhibition held at the Al-Faisal Museum of Arab-Islamic Art.";
            $mediaDepartmentCenter->translateOrNew("ch")->description = "週三，伊斯蘭歷1445 年Jumada Al-Awwal 1（即公元2023 年6 月15 日），費薩爾國王研究和伊斯蘭研究中心秘書長瑪哈·賓特·穆罕默德·費薩爾公主殿下接見了首席營銷和Roshan 集團通訊官 Ghada Al-Rumayyan 教授在費薩爾國王慈善基金會董事會成員海法費薩爾公主殿下的見證下。 她也參觀了費薩爾阿拉伯伊斯蘭藝術博物館舉辦的遊記展。";
            $mediaDepartmentCenter->save();
        }


        ########## الفعليات القادمه #########
        for ($i = 17 ; $i <= 32 ; $i++){

            $mediaDepartmentCenter = new MediaCenterDepartment();
            $mediaDepartmentCenter->image_url = "storage/media_center_departments/images/previous_events/".$i.".png";
            $mediaDepartmentCenter->type = "next_events";
            $mediaDepartmentCenter->save();
            $mediaDepartmentCenter->translateOrNew("ar")->title =  "حلقة نقاش عامة: عوالم الإسلام في آسيا: ألف عام من التبادل التاريخي";
            $mediaDepartmentCenter->translateOrNew("en")->title = "General Panel Discussion: The Realms of Islam in Asia: A Thousand Years of Historical Exchange";
            $mediaDepartmentCenter->translateOrNew("ch")->title = "一般小組討論：亞洲伊斯蘭領域：一千年的歷史交流";
            $mediaDepartmentCenter->translateOrNew("ar")->description =  "استقبلت صاحبة السمو الملكي الأميرة مها بنت محمد الفيصل، الأمين العام لـ لمركز الملك فيصل للبحوث والدراسات الإسلامية، يوم الأربعاء، ١ جمادى الأولى ١٤٤٥هـ الموافق ١٥ يونيو نوفمبر ٢٠٢٣م‬⁩، الرئيس التنفيذي للتسويق والتواصل بمجموعة روشن، الأستاذة غادة الرميان، وذلك بحضور صاحبة السمو الملكي الأميرة هيفاء الفيصل، عضو مجلس أمناء مؤسسة الملك فيصل الخيرية. كما زارت معرض ⁧‫أسفار‬⁩ المقام في متحف الفيصل للفن العربي الإسلامي.";
            $mediaDepartmentCenter->translateOrNew("en")->description =  "On Wednesday, Jumada Al-Awwal 1, 1445 AH, corresponding to June 15, 2023 AD, Her Royal Highness Princess Maha bint Muhammad Al-Faisal, Secretary-General of the King Faisal Center for Research and Islamic Studies, received the Chief Marketing and Communications Officer of the Roshan Group, Professor Ghada Al-Rumayyan, in the presence of Her Highness. Royal Princess Haifa Al-Faisal, member of the Board of Trustees of the King Faisal Charitable Foundation. She also visited the Travels exhibition held at the Al-Faisal Museum of Arab-Islamic Art.";
            $mediaDepartmentCenter->translateOrNew("ch")->description = "週三，伊斯蘭歷1445 年Jumada Al-Awwal 1（即公元2023 年6 月15 日），費薩爾國王研究和伊斯蘭研究中心秘書長瑪哈·賓特·穆罕默德·費薩爾公主殿下接見了首席營銷和Roshan 集團通訊官 Ghada Al-Rumayyan 教授在費薩爾國王慈善基金會董事會成員海法費薩爾公主殿下的見證下。 她也參觀了費薩爾阿拉伯伊斯蘭藝術博物館舉辦的遊記展。";
            $mediaDepartmentCenter->save();
        }
    }
}
