<?php

namespace Database\Seeders;

use App\Models\Antique;
use App\Models\Author;
use Illuminate\Database\Seeder;

class AntiqueTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        for ($i = 1; $i <= 6; $i++) {

            $antique = new Antique();
            $antique->price = 100;
            $antique->save();

            $antique->translateOrNew("ar")->name = $i . "تحفه اثريه ";
            $antique->translateOrNew("en")->name = "An archaeological masterpiece " . $i;
            $antique->translateOrNew("ch")->name = "考古傑作 " . $i;
            $antique->translateOrNew("ar")->period = "فتره العصور الوسطي";
            $antique->translateOrNew("en")->period = "Medieval period";
            $antique->translateOrNew("ch")->period = "中世紀時期";
            $antique->translateOrNew("ar")->material = "المعدن";
            $antique->translateOrNew("en")->material = "Metal";
            $antique->translateOrNew("ch")->material = "金屬";
            $antique->translateOrNew("ar")->origin = "العصر الحجري القديم";
            $antique->translateOrNew("en")->origin = "Paleolithic era";
            $antique->translateOrNew("ch")->origin = "舊石器時代";
            $antique->translateOrNew("ar")->description = "هذا الكتاب هو بالدرجة الأولى محاولة لدراسة تاريخ العلوم الإسلامية والعربية. إذ يتناول بالنقد النظريات الشائعة حول مكانة هذه العلوم ويحاول الاستفادة من أحدث نتائج البحث التاريخي لصياغة سردية جديدة يمكنها تقديم تفسير أفضل للتطورات العلمية على نحو خاص والاتجاهات الكبرى في التاريخ الفكري للحضارة الإسلامية على نحو أشمل. يتطرق الكتاب إلى التقسيم المرحلي للعلوم، وارتباطها بمحيطها الفكري الواسع، والأبعاد الاجتماعية والسياسية للإنتاج العلمي، والعلاقة بين التفاصيل العلمية التقنية في علم بعينه والتقدير والدعم الاجتماعي الذي حظيت به العلوم. ويُعنى مركز الملك فيصل للبحوث والدراسات الإسلامية منذ تأسيسه عام ١٤٠٣هـ/ ١٩٨٣م بتراث الحضارة العربية والإسلامية، وانطلاقًا من رسالته العلمية التي تهدف إلى نشر المعرفة، والعناية بالتراث، وتعزيز الهوية العربية؛ أطلق المركز مبادرة (المروية العربية) كمشروع جديد يمثّل موجةً من المثاقفة الأممية التي تكشف عن السردية الموضوعية لما كانت عليه حضارة العرب والمسلمين عبر التاريخ من تفوُّقٍ وإبداع، وما لها من آثارٍ على تطور العلوم الإنسانية وغيرها من المجالات، ولعل التصفُّح الموضوعي لتاريخ العلوم العربية الإسلامية على وجه الخصوص؛ يكشف لنا عن أبعاد وآليات تأثيرها العميق في قيام النهضة الأوربية التي أفادت من علوم الحضارة الإسلامية في عصورها الأولى، وقد عمد المركز إلى تخيُّر أرفع الدراسات الأكاديمية والبحوث العلمية التي تصبُّ في تحقيق الرؤية الموضوعية لــ(المروية العربية) ونشرها لتكون بين أيدي القرّاء في بيانٍ مشرق، ودقة عالية، إسهامًا في تطوير الوعي بالذات، والاعتزاز بالهوية، وإحياء الريادة العربية الإسلامية، وتعزيز المفهوم الحضاري للثقافة العربية لدى أجيالنا الحاضرة. ومن هذه الدراسات المهمة المتقنة التي أولاها المركز عناية كبيرة؛ كتاب «العلوم الإسلامية وقيام النهضة الأوروبية»، لمؤلفه البروفيسور جورج صليبا، المؤرِّخ والباحث المعروف، وقد نقله إلى العربية المترجِم المقتدر الدكتور حكمت درباس، وقام فريق النشر في المركز بمراجعته والعناية بإنتاجه حتى يخرج بصورةٍ مُرضية. يندرج هذا الكتاب ضمن الأعمال العلمية الجادة التي تتناول (تاريخ العلوم)، ويعني بالعلوم تلك التي أنتجتها الحضارة العربية الإسلامية. (الإسلامية) بالمعنى الحضاري العميق الذي يشمل كل مَن يستظل بتلك الحضارة من مسلمين وغير مسلمين، و(العربية) بالمعنى الثقافي للهوية العربية التي كانت لغة العلم طيلة تلك القرون المزدهرة، حيث يدور الكتاب حول علم الفلك بأبعادٍ مختلفة؛ من سؤال البدايات، مرورًا بالتطوّر، فالتأثير، وصولًا إلى تحليل ما وُصف بعصر الانحطاط وتراجع الفكر العلمي، وما تلا ذلك العصر من إنجازات علمية إسلامية أفرزت نتائجها كثيرًا من الأسئلة حول مصطلح الانحطاط، وأهمية تحليل أبعاده، وربما إعادة تفكيك مفهومه برؤية علمية موضوعية وجديدة. كل ذلك برصدٍ تاريخي، وتحليلٍ فلسفي، ومناقشةٍ موضوعية، لوضع هذا المنجز الحضاري في موضعه اللائق به، والإسهام في تأسيس رؤية معرفية لتحقيق أهداف (المروية العربية) في سياق يربط بين الماضي والحاضر في آنٍ واحد. ونحن في مركز الملك فيصل؛ نرجو أن يكون نشرنا لهذا الكتاب المهم إضافة نوعية للمكتبة العربية، ودعوة للتأمل في تاريخ العلوم التي أنتجتها الحضارة العربية والإسلامية في مختلف المجالات.";
            $antique->translateOrNew("en")->description = "This book is primarily an attempt to study the history of Islamic and Arabic sciences. It critically examines prevalent theories about the status of these sciences and seeks to utilize the latest findings of historical research to formulate a new narrative that can provide a better interpretation of scientific developments, particularly the major trends in the intellectual history of Islamic civilization in a comprehensive manner. The book addresses the periodization of sciences, their connection to their broader intellectual context, the social and political dimensions of scientific production, and the relationship between the technical scientific details of a particular science and the appreciation and social support that sciences received. Since its establishment in 1403 AH/1983 CE, the King Faisal Center for Research and Islamic Studies has been concerned with the heritage of Arab and Islamic civilization, and based on its scientific mission aimed at disseminating knowledge, caring for heritage, and enhancing Arab identity, the center launched the initiative of as a new project representing a wave of international awareness that reveals the objective narrative of the excellence and creativity of the Arab and Muslim civilization throughout history, and its effects on the development of humanities and other fields. Perhaps the objective exploration of the history of Islamic-Arabic sciences, in particular, reveals dimensions and mechanisms of its deep impact on the emergence of the European Renaissance, which benefited from the sciences of Islamic civilization in its early ages. The center has chosen the highest academic studies and scientific research that contribute to achieving the objective vision of the  and publishing them to be in the hands of readers in a clear and accurate statement, contributing to developing self-awareness, pride in identity, reviving Arab-Islamic leadership, and enhancing the civilizational concept of Arab culture in our present generations. Among these meticulous studies that the center paid great attention to is the book  by Professor George Saliba, the renowned historian and researcher, translated into Arabic by the competent translator Dr. Hakam Durbas. The center's publishing team reviewed and carefully produced it to achieve a satisfactory form. This book falls within serious scientific works that address the history of sciences, and it focuses on the sciences produced by Arab-Islamic civilization. in the profound civilizational sense that includes everyone sheltered by that civilization, Muslims and non-Muslims alike, and  in the cultural sense of the Arabic identity, which was the language of science throughout those flourishing centuries. The book revolves around the science of astronomy from different dimensions; from questioning the beginnings, through evolution, influence, to analyzing what was described as the era of decay and the decline of scientific thought, and what followed that era of Islamic scientific achievements that raised many questions about the concept of decay, the importance of analyzing its dimensions, and perhaps redefining it with a scientific, objective, and new vision. All this with historical observation, philosophical analysis, and objective discussion, to place this civilizational achievement in its rightful place and contribute to establishing a cognitive vision to achieve the goals of the in a context that connects the past and the present simultaneously. We at the King Faisal Center hope that our publication of this important book will be a qualitative addition to the Arabic library, and an invitation to contemplate the history of the sciences produced by Arab and Islamic civilization in various fields.";
            $antique->translateOrNew("ch")->description = "这本书主要是对伊斯兰和阿拉伯科学历史的研究尝试。它对关于这些科学地位的普遍理论进行了批判性审查，并试图利用历史研究的最新发现来制定一个新的叙述，以更好地解释科学发展，特别是伊斯兰文明的知识史中的主要趋势。本书讨论了科学的时期划分，它们与更广泛的知识背景的联系，科学生产的社会和政治维度，以及某一科学的技术细节与科学受到的欣赏和社会支持之间的关系。自1983年伊斯兰历1403年成立以来，国王费萨尔研究和伊斯兰研究中心一直关注阿拉伯和伊斯兰文明的遗产，并基于其传播知识、关心遗产和增强阿拉伯身份的科学使命，中心启动了“阿拉伯复兴”倡议，作为一项新的项目，代表了国际意识的一波，揭示了阿拉伯和穆斯林文明在历史上的卓越和创造力，以及对人文学科和其他领域发展的影响。也许，对伊斯兰阿拉伯科学历史的客观探索，尤其是揭示了它对欧洲文艺复兴的兴起产生了深远影响，这场文艺复兴在其早期受益于伊斯兰文明的科学。中心选择了最高的学术研究和科学研究，有助于实现“阿拉伯复兴”的客观愿景，并将其出版以清晰准确的陈述形式呈现给读者，有助于培养自我意识，引以为豪的身份认同，振兴阿拉伯-伊斯兰领导力，并加强阿拉伯文化的文明概念。其中，中心非常关注的精心研究之一是乔治·萨利巴教授的著作《伊斯兰科学与欧洲文艺复兴的兴起》，由著名历史学家和研究员哈卡姆·杜尔巴斯博士翻译成阿拉伯语。中心的出版团队对此进行了审查和精心制作，以达到令人满意的形式。这本书属于严肃的科学作品，涉及科学史，并关注阿拉伯-伊斯兰文明产生的科学。在这种深刻的文明意义上，“伊斯兰”包括受该文";
            $antique->translateOrNew("ar")->category = "ادوات";
            $antique->translateOrNew("en")->category = "Tools";
            $antique->translateOrNew("ch")->category = "舊石器時代";
            $antique->save();


        }

    }
}
