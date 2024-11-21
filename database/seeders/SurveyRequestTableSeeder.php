<?php

namespace Database\Seeders;

use App\Models\Payment;
use App\Models\Reference;
use App\Models\ReferenceUserChoose;
use App\Models\Setting;
use App\Models\SurveyRequest;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SurveyRequestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */


    public function run()
    {

        $references = [

            '"سياحة" لريتشارد شارب',
            '"تسويق السياحة والضيافة" لفيليب كوتلر',
            '"السياحة والفقر" لداريل بيزلي',
            '"إدارة الخدمات السياحية" لجوني ألين وموسى زيدان',
            '"التنمية السياحية" لمايكل جي. موريس',
        ];

        $setting = Setting::first();

        ### New Orders
        for ($i = 1 ; $i <= 10 ; $i++) {

            $user = User::findOrFail($i);

            SurveyRequest::create([
                'subject_title' => 'السياحه في مصر',
                'department' => 'السياحه',
                'subject_description' => 'للسياحة فوائدة جمة تنعكس على البلد الذي يقصده السياح، حيث ينعكس هذا النشاط على اقتصاده فينعشه عن طريق استيعاب أعداد كبيرة من العاملين في هذا القطاع',
                'keywords' => json_encode(['السياحه', 'المعابد']),
                'total_amount' => $setting->survey_request,

                'user_id' => $user->id
            ]);
        }

        for ($i = 1 ; $i <= 10 ; $i++){

            $user  = User::findOrFail($i);

           $surveyRequest = SurveyRequest::create([
                'subject_title' => 'السياحه في مصر',
                'department' => 'السياحه',
                'subject_description' => 'للسياحة فوائدة جمة تنعكس على البلد الذي يقصده السياح، حيث ينعكس هذا النشاط على اقتصاده فينعشه عن طريق استيعاب أعداد كبيرة من العاملين في هذا القطاع',
                'keywords' => json_encode(['السياحه','المعابد']),
                'total_amount' => $setting->survey_request,
                'status' => 'under_processing',
                'user_id' => $user->id
            ]);


            for ($j = 0 ; $j <= 4 ; $j++) {
                $reference = Reference::create([
                    'reference_name' => $references[$j],
                    'reference_type' => 'pdf',
                    'pages_number' => 200,
                    'survey_request_id' => $surveyRequest->id,
                ]);

                ReferenceUserChoose::create([
                    'user_id' => $surveyRequest->user_id,
                    'reference_id' => $reference->id,
                    'from_page' => 10,
                    'to_page' => 59,
                ]);
            }



        }#### end first for loop
    }
}
