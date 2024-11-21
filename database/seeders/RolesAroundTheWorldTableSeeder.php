<?php

namespace Database\Seeders;

use App\Models\ResearchPaper;
use App\Models\RolesAroundTheWorld;
use Illuminate\Database\Seeder;

class RolesAroundTheWorldTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $arrayTitlesAr = [

            'رئيس فخري للحوار الألماني-العربي الخليجي.',
            'أستاذ زائر متميز في جامعة جورج تاون.',
            'أستاذ فخري في جامعة روما تور فيرغاتا.',
            'عضو مجلس أمناء مركز أكسفورد للدراسات الإسلامية بجامعة أكسفورد',
            'عضو المجلس الاستشاري لمجموعة الفكر العشرين (T20) السعودية، إحدى المجموعات المشاركة لمجموعة العشرين (G20) التي تقدم توصيات السياسات العامة لقادة دول مجموعة العشرين.',
            'وسموه مشارك فاعل كذلك في الاجتماع السنوي للمنتدى الاقتصادي العالمي، والندوة العالمية للاقتصاد، والاجتماع السنوي لمبادرة كلينتون العالمية. وكان سموه مفوضاً للجنة الدولية لعدم الانتشار النووي ونزع السلاح، وهي مبادرة مشتركة بين أستراليا واليابان.',
            'رئيس فخري للحوار الألماني-العربي الخليجي.',
            'أستاذ زائر متميز في جامعة جورج تاون.',
            'أستاذ فخري في جامعة روما تور فيرغاتا.',
            'عضو مجلس أمناء مركز أكسفورد للدراسات الإسلامية بجامعة أكسفورد',
            'عضو المجلس الاستشاري لمجموعة الفكر العشرين (T20) السعودية، إحدى المجموعات المشاركة لمجموعة العشرين (G20) التي تقدم توصيات السياسات العامة لقادة دول مجموعة العشرين.',
            'وسموه مشارك فاعل كذلك في الاجتماع السنوي للمنتدى الاقتصادي العالمي، والندوة العالمية للاقتصاد، والاجتماع السنوي لمبادرة كلينتون العالمية. وكان سموه مفوضاً للجنة الدولية لعدم الانتشار النووي ونزع السلاح، وهي مبادرة مشتركة بين أستراليا واليابان.',
            'وسموه مشارك فاعل كذلك في الاجتماع السنوي للمنتدى الاقتصادي العالمي، والندوة العالمية للاقتصاد، والاجتماع السنوي لمبادرة كلينتون العالمية. وكان سموه مفوضاً للجنة الدولية لعدم الانتشار النووي ونزع السلاح، وهي مبادرة مشتركة بين أستراليا واليابان.',

        ];

        $arrayTitlesEn = [

            'Honorary Chairman of the German-Arab Gulf Dialogue.',
            'Distinguished Visiting Professor at Georgetown University.',
            'Professor Emeritus at the University of Rome Tor Vergata.',
            'Member of the Board of Trustees of the Oxford Center for Islamic Studies at the University of Oxford',
            'Member of the Advisory Board of the Think Tank Group Twenty (T20) Saudi Arabia, one of the participating groups of the Group of Twenty (G20) that provides public policy recommendations to the leaders of the G20 countries.',
            'His Highness is also an active participant in the annual meeting of the World Economic Forum, the Global Economic Symposium, and the annual meeting of the Clinton Global Initiative. His Highness was a Commissioner of the International Commission for Nuclear Non-Proliferation and Disarmament, a joint initiative between Australia and Japan.',
            'Honorary Chairman of the German-Arab Gulf Dialogue.',
            'Distinguished Visiting Professor at Georgetown University.',
            'Professor Emeritus at the University of Rome Tor Vergata.',
            'Member of the Board of Trustees of the Oxford Center for Islamic Studies at the University of Oxford',
            'Member of the Advisory Board of the Think Tank Group Twenty (T20) Saudi Arabia, one of the participating groups of the Group of Twenty (G20) that provides public policy recommendations to the leaders of the G20 countries.',
            'His Highness is also an active participant in the annual meeting of the World Economic Forum, the Global Economic Symposium, and the annual meeting of the Clinton Global Initiative. His Highness was a Commissioner of the International Commission for Nuclear Non-Proliferation and Disarmament, a joint initiative between Australia and Japan.',
            'His Highness is also an active participant in the annual meeting of the World Economic Forum, the Global Economic Symposium, and the annual meeting of the Clinton Global Initiative. His Highness was a Commissioner of the International Commission for Nuclear Non-Proliferation and Disarmament, a joint initiative between Australia and Japan.',

        ];


        $arrayTitlesCh = [


            '超过5000字的研究论文',
            '关于人文学科的超过5000字的研究论文',
            '超过5000字的研究论文',
            '超过5000字的研究论文',
            '超过5000字的研究论文',
            '超过5000字的研究论文',
            '超过5000字的研究论文',
            '超过5000字的研究论文',
            '关于人文学科的超过5000字的研究论文',
            '关于人文学科的超过5000字的研究论文',
            '关于人文学科的超过5000字的研究论文',
            '关于人文学科的超过5000字的研究论文',
            '关于人文学科的超过5000字的研究论文',


        ];

        for ($i = 0 ; $i <= 12 ; $i++){

            $rolesAroundTheWorld = new RolesAroundTheWorld();
            $rolesAroundTheWorld->save();
            $rolesAroundTheWorld->translateOrNew("ar")->title = $arrayTitlesAr[$i];
            $rolesAroundTheWorld->translateOrNew("en")->title = $arrayTitlesEn[$i];
            $rolesAroundTheWorld->translateOrNew("ch")->title = $arrayTitlesCh[$i];
            $rolesAroundTheWorld->save();

        }
    }
}
