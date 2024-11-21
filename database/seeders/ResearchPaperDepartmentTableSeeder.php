<?php

namespace Database\Seeders;

use App\Models\PointOfSale;
use App\Models\ResearchPaperDepartment;
use Illuminate\Database\Seeder;

class ResearchPaperDepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $arrayTitlesAr = [

          'دراسات',
          'قراءات',
          'مسارات',
          'تعليقات',
          'متابعات افريقيه',
          'تقرير اسبوعي عن اثار كوفيد',
          'تقدير موقف',
          'تقارير خاصه',


      ];

        $arrayTitlesEn = [

            'Studies',
            'Readings',
            'Tracks',
            'Comments',
            'African Follow-ups',
            'Weekly Report on COVID Effects',
            'Position Appreciation',
            'Special Reports',

        ];



        $arrayTitlesCh = [

            '研究',
            '阅读',
            '轨迹',
            '评论',
            '非洲追踪',
            '关于COVID影响的每周报告',
            '立场评价',
            '特别报告',

        ];


        $arrayDescriptionsAr = [

            'ورقة بحثية تزيد على ٥٠٠٠ كلمة',
            'ورقة بحثية عن الدراسات الإنسانية تزيد على ٥٠٠٠ كلمة.',
            'ورقة بحثية تزيد على ٥٠٠٠ كلمة',
            'ورقة بحثية تزيد على ٥٠٠٠ كلمة',
            'ورقة بحثية تزيد على ٥٠٠٠ كلمة',
            'ورقة بحثية تزيد على ٥٠٠٠ كلمة',
            'ورقة بحثية تزيد على ٥٠٠٠ كلمة',
            'ورقة بحثية تزيد على ٥٠٠٠ كلمة',


        ];

        $arrayDescriptionsEn = [


            'Research paper exceeding 5000 words',
            'Research paper on humanities studies exceeding 5000 words.',
            'Research paper exceeding 5000 words',
            'Research paper exceeding 5000 words',
            'Research paper exceeding 5000 words',
            'Research paper exceeding 5000 words',
            'Research paper exceeding 5000 words',
            'Research paper exceeding 5000 words',
        ];



        $arrayDescriptionsCh = [

            '超过5000字的研究论文',
            '关于人文学科的超过5000字的研究论文',
            '超过5000字的研究论文',
            '超过5000字的研究论文',
            '超过5000字的研究论文',
            '超过5000字的研究论文',
            '超过5000字的研究论文',
            '超过5000字的研究论文',
            ];


        for($i = 0 ; $i <= 7 ; $i++){

            $researchPaperDepartment = new ResearchPaperDepartment();
            $researchPaperDepartment->save();
            $researchPaperDepartment->translateOrNew("ar")->title = $arrayTitlesAr[$i];
            $researchPaperDepartment->translateOrNew("en")->title = $arrayTitlesEn[$i];
            $researchPaperDepartment->translateOrNew("ch")->title = $arrayTitlesCh[$i];
            $researchPaperDepartment->translateOrNew("ar")->description = $arrayDescriptionsAr[$i];
            $researchPaperDepartment->translateOrNew("en")->description = $arrayDescriptionsEn[$i];
            $researchPaperDepartment->translateOrNew("ch")->description = $arrayDescriptionsCh[$i];
            $researchPaperDepartment->save();
        }

    }
}
