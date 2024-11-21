<?php

namespace Database\Seeders;

use App\Models\ResearchPaper;
use Illuminate\Database\Seeder;

class ResearchPaperTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $images = [
            'storage/research_papers/images/studies.png',
            'storage/research_papers/images/readings.png',
            'storage/research_papers/images/tracks.png',
            'storage/research_papers/images/comments.png',
            'storage/research_papers/images/african.png',
            'storage/research_papers/images/weekly.png',
            'storage/research_papers/images/position.png',
            'storage/research_papers/images/special.png',

        ];


        $arrayTitlesAr = [

          'الأمراض الخبيثة وحلاوة الدعاء: ترسيم وتجاوز الحدود في العوالم السحرية لمسلمي تشنغهاي (الصين)',
          'العشق والموت والتزكية في سير أولياء الجهرية وترجمة ما ديشِن الشارحة لقصيدة البُردة',
            'نتائج رئاسيات ٢٠٢٣ النيجيرية وتحديات المرحلة القادمة',
            'أزمة التغير المناخي، اجتماع COP27، والدور البناء المحتمل لدول مجلس التعاون في آسيا الغربية',
            'متابعات إفريقية، العدد السادس والثلاثون',
            'أزمة التغير المناخي، اجتماع COP27، والدور البناء المحتمل لدول مجلس التعاون في آسيا الغربية',
            'أزمة التغير المناخي، اجتماع COP27، والدور البناء المحتمل لدول مجلس التعاون في آسيا الغربية',
            'أزمة التغير المناخي، اجتماع COP27، والدور البناء المحتمل لدول مجلس التعاون في آسيا الغربية',


        ];

        $arrayTitlesEn = [
            'Malignant diseases and the sweetness of supplication: demarcating and transgressing boundaries in the magical worlds of Muslims in Chenghai (China)',
            'Love, death, and purity in the biographies of the saints of Al-Jahriyya and the translation of the commentary on the poem Al-Burda',
            'Results of the 2023 Nigerian presidential elections and the challenges of the next stage',
            'The climate change crisis, the COP27 meeting, and the potential constructive role of the Gulf Cooperation Council countries in West Asia',
            'African Follow-ups, Issue Thirty-Six',
            'The climate change crisis, the COP27 meeting, and the potential constructive role of the Gulf Cooperation Council countries in West Asia',
            'The climate change crisis, the COP27 meeting, and the potential constructive role of the Gulf Cooperation Council countries in West Asia',
            'The climate change crisis, the COP27 meeting, and the potential constructive role of the Gulf Cooperation Council countries in West Asia',
        ];

        $categoryIds = [

            1,2,3,4,5,6,7,8
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
        ];


        for ($i = 0 ; $i <=7 ; $i++){

            for ($j = 0 ; $j <= 14 ; $j++){

              $researchPaper = new ResearchPaper();
              $researchPaper->editor = "ألكسندر رى";
              $researchPaper->background_image = $images[$i];
              $researchPaper->research_department_id = $categoryIds[$i];
              $researchPaper->save();
              $researchPaper->translateOrNew("ar")->title = $arrayTitlesAr[$i];
              $researchPaper->translateOrNew("en")->title = $arrayTitlesEn[$i];
              $researchPaper->translateOrNew("ch")->title = $arrayTitlesCh[$i];
              $researchPaper->translateOrNew("ar")->description = "منذ سنة ۲۰۲٠م، وإلى حد شهر سبتمبر من السنة الجارية ۲۰۲۳م، شهدت إفريقيا موجة جديدة من الانقلابات العسكرية، كان آخرها - وإلى ما حد الآن- ما حدث في الغابون، نهاية شهر أغسطس من هذه السنة. وقد سبقه بشهر انقلاب في النيجر، الأمر الذي أثار الاهتمام من جديد، بمدى استقرار مؤسسات الدولة الدستورية والمدنية في القارة. انقلاب تقوم بها وحدات عسكرية، وجدت خصيصا لحماية أعلى مؤسسات الدولة، مثل: الرئاسة والحكومة ظاهرة تثير تساؤلات عن خلفية هذه الأحداث السياسية /الأمنية، والأطراف الداخلية والخارجية - إن وجدت - التي تقف وراءها، وعن تداعياتها الإقليمية والدولية، وتكلفتها الاقتصادية والسياسية، وكيف يمكن أن تتعامل معها المنظمات الإقليمية، والقوى الدولية. في هذا العدد مجموعة من الأوراق، تحاول الإجابة عن بعض هذه الأسئلة وغيرها. لكن السياق الإفريقي العام، الذي ينزل فيه العدد الجديد «من متابعات إفريقية»، هو عودة الانقلابات، وعدم تحقيق تقدم مهم على المستوى الأمني، في البلدان التي تحكمها مجموعات انقلابية منذ بضع سنوات؛ مما يدعو إلى التساؤل حول الجدوى منها. من جهة ثانية، يتواصل الاهتمام في هذا العدد بتقييم تجربة التعليم العربي في البلدان الإفريقية الناطقة بغيرها، ويتم ذلك من خلال تتبع تاريخ تأسيس مدارس تعليم اللغة العربية، وانتشارها وتطورها، والتحديات التي تواجهها، من حيث مستقبل خريجيها المهني، وتمويلها، وتكوين إطاراتها، ومستوى أدائها، بالمقارنة مع التعليم في المؤسسات التعليمية الموازية. وفي إطار البحث في أصول ومظاهر العلاقات العربية الإفريقية في التاريخ تأتي أهمية دراسة الرحلات العلمية والحجية من بلاد الهوسا، إلى بلاد الحرمين الشريفين، والتعريف بالعلماء الذين تركوا أثرا مخطوطا، يمكن تصنيفه ضمن أدب الرحلات. وفي باب الاهتمام بالأوضاع الاقتصادية والاجتماعية في القارة الإفريقية، تضمن العدد ورقة عن ظاهرة الفقر، وأسبابها وطرق معالجتها؛ ولا سيما في ظل تتابع الأزمات الدولية. كما تطرقت ورقة ثانية إلى مسؤولية الانقلابات العسكرية، في إعاقة مسيرة التنمية، وتعطيل الإصلاحات، بوقوع الأنظمة الانقلابية تحت طائلة العقوبات الإقليمية والدولية، والحصار، وهدر الموارد.... وبالتوازي مع ذلك، تضمن العدد ورقة عن أسباب وعوامل استمرار توسع عمل بعض الحركات الإرهابية (الصومال مثال على ذلك)، رغم وجود جهود محلية وإقليمية ودولية، لمواجهة الظاهرة؛ فهل يعود ذلك إلى قصور في أدوات وإستراتيجيات المواجهة، أو أنها عوامل ذاتية تفسر ذلك؟ وهي اسئلة تطرح في الحقيقة على مكافحة الإرهاب؛ سواء أكان في منطقة الساحل والصحراء، أم في شرقي إفريقيا.";
              $researchPaper->translateOrNew("en")->description = "Since the year 2020 AD, and until September of the current year 2023 AD, Africa has witnessed a new wave of military coups, the most recent of which - and so far - was what happened in Gabon, at the end of August of this year. It was preceded a month ago by a coup in Niger, which raised renewed interest in the extent of the stability of the constitutional and civil state institutions on the continent. A coup carried out by military units, specifically created to protect the highest state institutions, such as the presidency and the government, is a phenomenon that raises questions about the background of these political/security events, the internal and external parties - if any - that stand behind them, their regional and international repercussions, their economic and political cost, and how they can To be dealt with by regional organizations and international powers. This issue contains a group of papers that attempt to answer some of these and other questions. But the general African context, in which the new issue of “African Follow-ups” appears, is the return of coups, and the failure to achieve significant progress on the security level, in countries that have been ruled by coup groups for a few years. Which raises questions about its feasibility. On the other hand, the interest in this issue continues to evaluate the experience of Arabic education in non-speaking African countries. This is done by tracing the history of the establishment of Arabic language schools, their spread and development, and the challenges they face, in terms of the professional future of their graduates, their financing, the composition of their frameworks, and the level of Its performance, compared to education in parallel educational institutions. Within the framework of research into the origins and manifestations of Arab-African relations in history, the importance of studying scholarly and authentic travels from the Hausa country to the land of the Two Holy Mosques comes, and introducing scholars who left a written trace that can be classified within travel literature. Concerning the economic and social conditions on the African continent, the issue included a paper on the phenomenon of poverty, its causes and ways to address it. Especially in light of the successive international crises. A second paper also touched on the responsibility of military coups in obstructing the development process and disrupting reforms, with coup regimes falling under the threat of regional and international sanctions, siege, and wasting resources. In parallel with that, the issue included a paper on the reasons and factors for the continued expansion of the work of some terrorist movements. (Somalia is an example of this), despite the presence of local, regional and international efforts to confront the phenomenon. Is this due to a deficiency in coping tools and strategies, or are these subjective factors that explain this? These are questions that actually arise from the fight against terrorism. Whether in the Sahel and Sahara region, or in East Africa.";
              $researchPaper->translateOrNew("ch")->description = "自公元2020年以來，一直到公元2023年9月，非洲見證了新一波的軍事政變，其中最近的一次是今年8月底在加蓬發生的政變。 。 一個月前，尼日發生了一場政變，這再次引發了人們對非洲大陸憲法和民事國家機構穩定性的興趣。 由專門為保護總統和政府等最高國家機構而設立的軍事單位發動的政變，引發了人們對這些政治/安全事件的背景、內部和外部政黨（如果有的話）的質疑。它們背後的支持者、它們的區域和國際影響、它們的經濟和政治成本，以及區域組織和國際大國如何應對它們。 本期包含一組試圖回答其中一些問題和其他問題的論文。 但新一期《非洲後續》出現的非洲大背景是政變捲土重來，在安全層面未能取得重大進展，一些國家已經被政變組織統治了數年。年。 這引發了對其可行性的質疑。 另一方面，這個問題的興趣繼續評估非洲非語國家阿拉伯語教育的經驗，這是透過追溯阿拉伯語學校的建立歷史、傳播和發展以及它們面臨的挑戰來完成的。 ，與平行教育機構的教育相比，就其畢業生的職業未來、融資、框架的組成及其績效水準而言。 在研究阿拉伯-非洲關係歷史上的起源和表現的框架內，研究從豪薩國家到兩聖清真寺之地的學術和真實旅行的重要性就凸顯出來，並介紹那些留下了書面痕蹟的學者屬於旅行文學。 關於非洲大陸的經濟和社會狀況，該問題包括一篇關於貧窮現象、其原因和解決方法的論文。 特別是考慮到接二連三的國際危機。 第二篇論文也談到了軍事政變在阻礙發展進程和擾亂改革方面的責任，政變政權面臨區域和國際制裁、圍困和浪費資源的威脅。一些恐怖主義運動繼續擴大活動的原因和因素（索馬利亞就是一個例），儘管地方、區域和國際社會都在努力應對這一現象。 這是由於因應工具和策略的缺乏，還是這些主觀因素造成的？ 這些都是反恐鬥爭中實際出現的問題。 無論是在薩赫勒和撒哈拉地區，或是在東非。";
              $researchPaper->save();

            }
        }


    }
}
