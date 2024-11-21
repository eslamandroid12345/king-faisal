<?php

namespace Database\Seeders;

use App\Models\BookStoreTranslation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookStoreTranslationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for ($i=1;$i<= 41;$i++){

            BookStoreTranslation::create([
                'title' => 'العلوم الإسلامية وقيام النهضة الأوروبية (مترجم)',
                'description' => 'هذا الكتاب هو بالدرجة الأولى محاولة لدراسة تاريخ العلوم الإسلامية والعربية. إذ يتناول بالنقد النظريات الشائعة حول مكانة هذه العلوم ويحاول الاستفادة من أحدث نتائج البحث التاريخي لصياغة سردية جديدة يمكنها تقديم تفسير أفضل للتطورات العلمية على نحو خاص والاتجاهات الكبرى في التاريخ الفكري للحضارة الإسلامية على نحو أشمل. يتطرق الكتاب إلى التقسيم المرحلي للعلوم، وارتباطها بمحيطها الفكري الواسع، والأبعاد الاجتماعية والسياسية للإنتاج العلمي، والعلاقة بين التفاصيل العلمية التقنية في علم بعينه والتقدير والدعم الاجتماعي الذي حظيت به العلوم. ويُعنى مركز الملك فيصل للبحوث والدراسات الإسلامية منذ تأسيسه عام ١٤٠٣هـ/ ١٩٨٣م بتراث الحضارة العربية والإسلامية، وانطلاقًا من رسالته العلمية التي تهدف إلى نشر المعرفة، والعناية بالتراث، وتعزيز الهوية العربية؛ أطلق المركز مبادرة (المروية العربية) كمشروع جديد يمثّل موجةً من المثاقفة الأممية التي تكشف عن السردية الموضوعية لما كانت عليه حضارة العرب والمسلمين عبر التاريخ من تفوُّقٍ وإبداع، وما لها من آثارٍ على تطور العلوم الإنسانية وغيرها من المجالات، ولعل التصفُّح الموضوعي لتاريخ العلوم العربية الإسلامية على وجه الخصوص؛ يكشف لنا عن أبعاد وآليات تأثيرها العميق في قيام النهضة الأوربية التي أفادت من علوم الحضارة الإسلامية في عصورها الأولى، وقد عمد المركز إلى تخيُّر أرفع الدراسات الأكاديمية والبحوث العلمية التي تصبُّ في تحقيق الرؤية الموضوعية لــ(المروية العربية) ونشرها لتكون بين أيدي القرّاء في بيانٍ مشرق، ودقة عالية، إسهامًا في تطوير الوعي بالذات، والاعتزاز بالهوية، وإحياء الريادة العربية الإسلامية، وتعزيز المفهوم الحضاري للثقافة العربية لدى أجيالنا الحاضرة. ومن هذه الدراسات المهمة المتقنة التي أولاها المركز عناية كبيرة؛ كتاب «العلوم الإسلامية وقيام النهضة الأوروبية»، لمؤلفه البروفيسور جورج صليبا، المؤرِّخ والباحث المعروف، وقد نقله إلى العربية المترجِم المقتدر الدكتور حكمت درباس، وقام فريق النشر في المركز بمراجعته والعناية بإنتاجه حتى يخرج بصورةٍ مُرضية. يندرج هذا الكتاب ضمن الأعمال العلمية الجادة التي تتناول (تاريخ العلوم)، ويعني بالعلوم تلك التي أنتجتها الحضارة العربية الإسلامية. (الإسلامية) بالمعنى الحضاري العميق الذي يشمل كل مَن يستظل بتلك الحضارة من مسلمين وغير مسلمين، و(العربية) بالمعنى الثقافي للهوية العربية التي كانت لغة العلم طيلة تلك القرون المزدهرة، حيث يدور الكتاب حول علم الفلك بأبعادٍ مختلفة؛ من سؤال البدايات، مرورًا بالتطوّر، فالتأثير، وصولًا إلى تحليل ما وُصف بعصر الانحطاط وتراجع الفكر العلمي، وما تلا ذلك العصر من إنجازات علمية إسلامية أفرزت نتائجها كثيرًا من الأسئلة حول مصطلح الانحطاط، وأهمية تحليل أبعاده، وربما إعادة تفكيك مفهومه برؤية علمية موضوعية وجديدة. كل ذلك برصدٍ تاريخي، وتحليلٍ فلسفي، ومناقشةٍ موضوعية، لوضع هذا المنجز الحضاري في موضعه اللائق به، والإسهام في تأسيس رؤية معرفية لتحقيق أهداف (المروية العربية) في سياق يربط بين الماضي والحاضر في آنٍ واحد. ونحن في مركز الملك فيصل؛ نرجو أن يكون نشرنا لهذا الكتاب المهم إضافة نوعية للمكتبة العربية، ودعوة للتأمل في تاريخ العلوم التي أنتجتها الحضارة العربية والإسلامية في مختلف المجالات.',
                'series' => ' سلسلة الكتب المترجمة',
                'cover' => 'عادي',
                'additional_information' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.',
                'contents' => 'هناك حقيقة مثبتة منذ زمن طويل وهي أن المحتوى المقروء لصفحة ما سيلهي القارئ عن التركيز على الشكل الخارجي للنص أو شكل توضع الفقرات في الصفحة التي يقرأها. ولذلك يتم استخدام طريقة لوريم إيبسوم لأنها تعطي توزيعاَ طبيعياَ -إلى حد ما- للأحرف عوضاً عن استخدام "هنا يوجد محتوى نصي، هنا يوجد محتوى نصي" فتجعلها تبدو (أي الأحرف) وكأنها نص مقروء.',
                'locale' => 'ar',
                'book_store_id' => $i,
            ]);
        }


        for ($i=1;$i<= 41;$i++){
            BookStoreTranslation::create([
                'title' => 'Islamic sciences and the rise of the European Renaissance (translated)',
                'description' => 'This book is primarily an attempt to study the history of Islamic and Arab sciences. It criticizes common theories about the status of these sciences and attempts to benefit from the latest results of historical research to formulate a new narrative that can provide a better explanation of scientific developments in particular and major trends in the intellectual history of Islamic civilization more generally. The book addresses the phased division of science, its connection to its broad intellectual environment, the social and political dimensions of scientific production, and the relationship between technical scientific details in a particular science and the appreciation and social support that science has received. Since its founding in 1403 AH/1983 AD, the King Faisal Center for Research and Islamic Studies has been concerned with the heritage of Arab and Islamic civilization, and based on its scientific mission that aims to spread knowledge, care for heritage, and strengthen Arab identity. The Center launched the (Arabic Irrigation) initiative as a new project that represents a wave of international acculturation that reveals the objective narrative of the superiority and creativity of Arab and Muslim civilization throughout history, and its effects on the development of the human sciences and other fields. Perhaps objective browsing of the history of Arab-Islamic sciences In particular; It reveals to us the dimensions and mechanisms of its profound influence on the establishment of the European Renaissance, which benefited from the sciences of Islamic civilization in its early eras. The Center has deliberately selected the highest academic studies and scientific research that aim to achieve the objective vision of (Arabic Meroitic) and published it so that it is in the hands of readers in a bright statement. , and high accuracy, as a contribution to developing self-awareness, pride in identity, reviving Arab-Islamic leadership, and enhancing the civilized concept of Arab culture among our present generations. Among these important and elaborate studies to which the Center paid great attention: The book “Islamic Sciences and the Rise of the European Renaissance,” written by Professor George Saliba, the well-known historian and researcher, was translated into Arabic by the distinguished translator, Dr. Hikmat Derbas, and the publishing team at the Center reviewed it and took care to produce it until it came out in a satisfactory manner. This book falls within the serious scientific works that deal with (the history of science), and by sciences it means those produced by the Arab-Islamic civilization. (Islamic) in the deep cultural sense that includes all those who take shelter in that civilization, whether Muslims or non-Muslims, and (Arabic) in the cultural sense of Arab identity, which was the language of science throughout those prosperous centuries. The book revolves around astronomy in different dimensions. From the question of beginnings, through development, and influence, all the way to the analysis of what was described as the era of decadence and decline of scientific thought, and the Islamic scientific achievements that followed that era, the results of which raised many questions about the term decadence, the importance of analyzing its dimensions, and perhaps re-deconstructing its concept with an objective and new scientific vision. All of this is done through historical observation, philosophical analysis, and objective discussion, to place this cultural achievement in its proper place, and to contribute to establishing a cognitive vision to achieve the goals of (Arabic narration) in a context that links the past and the present at the same time. We are at the King Faisal Center; We hope that our publication of this important book will be a qualitative addition to the Arab library, and an invitation to reflect on the history of sciences produced by Arab and Islamic civilization in various fields.',
                'series' => 'Translated book series',
                'cover' => 'normal',
                'additional_information' => 'There is a long-established fact that the readable content of a page will distract the reader from focusing on the external appearance of the text or the way the paragraphs are placed on the page he is reading. Therefore, the Lorem Ipsum method is used because it gives a natural distribution - to some extent - to the letters instead of using “here there is text content, here there is text content” and thus makes them (i.e. the letters) appear as readable text.',
                'contents' => 'There is a long-established fact that the readable content of a page will distract the reader from focusing on the external appearance of the text or the way the paragraphs are placed on the page he is reading. Therefore, the Lorem Ipsum method is used because it gives a natural distribution - to some extent - to the letters instead of using “here there is text content, here there is text content” and thus makes them (i.e. the letters) appear as readable text.',
                'locale' => 'en',
                'book_store_id' => $i,
            ]);

        }


        for ($i=1;$i<= 41;$i++){

            BookStoreTranslation::create([
                'title' => '伊斯蘭科學與歐洲文藝復興的興起（翻譯）',
                'description' => '本書主要是研究伊斯蘭和阿拉伯科學史的嘗試。 它批評有關這些科學地位的常見理論，並試圖從歷史研究的最新成果中受益，以製定一種新的敘述，可以更好地解釋特別是科學發展以及更廣泛的伊斯蘭文明思想史的主要趨勢。 本書討論了科學的階段性劃分、其與廣泛的知識環境的聯繫、科學生產的社會和政治維度，以及特定科學中的技術科學細節與科學所獲得的欣賞和社會支持之間的關係。 自伊斯蘭歷 1403 年/公元 1983 年成立以來，費薩爾國王研究和伊斯蘭研究中心一直關注阿拉伯和伊斯蘭文明的遺產，並基於其旨在傳播知識、關心遺產和加強阿拉伯文明的科學使命。身份。 該中心發起了「阿拉伯灌溉」倡議，作為一個新項目，它代表了國際文化適應的浪潮，客觀地揭示了阿拉伯和穆斯林文明在歷史上的優越性和創造力，及其對人文科學和其他學科發展的影響。或許可以客觀地瀏覽阿拉伯-伊斯蘭科學的歷史，特別是； 它向我們揭示了其對歐洲文藝復興的建立產生深遠影響的維度和機制，歐洲文藝復興得益於早期伊斯蘭文明的科學。該中心特意選擇了最高的學術研究和科學研究，旨在實現（阿拉伯語Meroitic）的客觀願景並將其出版，以便以清晰的聲明形式呈現在讀者手中。並且高度準確，為發展自我意識、身份自豪感、復興阿拉伯伊斯蘭領導力和加強阿拉伯伊斯蘭領導力做出貢獻。我們當代對阿拉伯文化的文明觀念。 在這些中心高度關注的重要而詳盡的研究中： 由著名歷史學家、研究者喬治·薩利巴教授撰寫的《伊斯蘭科學與歐洲文藝復興的興起》一書，由著名翻譯家希克馬特·德巴斯博士翻譯成阿拉伯文，中心出版團隊審閱並精心製作，直到以令人滿意的方式完成。 本書屬於處理（科學史）的嚴肅科學著作，科學指的是阿拉伯伊斯蘭文明所產生的科學。 （伊斯蘭）在深刻的文化意義上，包括所有在該文明中庇護的人，無論是穆斯林還是非穆斯林，以及（阿拉伯語）在阿拉伯身份的文化意義上，這是整個繁榮世紀的科學語言。本書圍繞著不同維度的天文學展開。 從起源問題，經過發展和影響，一直到分析所謂的科學思想的頹廢和衰落時代，以及該時代之後的伊斯蘭科學成就，其結果提出了許多問題關於“頹廢”一詞，分析其維度的重要性，或許還可以用客觀新的科學視野重新解構其概念。 所有這一切都是透過歷史觀察、哲學分析和客觀討論來完成的，將這種文化成果放在適當的位置，並有助於建立一種認知願景，以在聯繫過去的背景下實現（阿拉伯敘述）的目標。和同時的現在。 我們在費薩爾國王中心； 我們希望這本重要著作的出版​​將為阿拉伯圖書館提供質的補充，並邀請人們反思阿拉伯和伊斯蘭文明在各個領域所產生的科學史。',
                'series' => '翻譯叢書',
                'cover' => '普通的',
                'additional_information' => '個長期存在的事實是，頁面的可讀內容會分散讀者對文字外觀或段落在他正在閱讀的頁面上的放置方式的注意力。 因此，使用 Lorem Ipsum 方法是因為它在某種程度上給了字母自然分佈，而不是使用“這裡有文字內容，這裡有文字內容”，從而使它們（即字母）看起來可讀文字。',
                'contents' => '個長期存在的事實是，頁面的可讀內容會分散讀者對文字外觀或段落在他正在閱讀的頁面上的放置方式的注意力。 因此，使用 Lorem Ipsum 方法是因為它在某種程度上給了字母自然分佈，而不是使用“這裡有文字內容，這裡有文字內容”，從而使它們（即字母）看起來可讀文字。',
                'locale' => 'ch',
                'book_store_id' => $i,
            ]);
        }



    }
}
