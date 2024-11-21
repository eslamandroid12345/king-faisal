<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Setting::create([
            'logo' => 'storage/setting/images/Logo.png',
            'king_faisal_and_family_image' => 'storage/setting/images/king_faisal_and_family_image.png',
            'facebook_url' => 'https://www.facebook.com/',
            'youtube_url' => 'https://youtube.com/',
            'linkedin_url' => 'https://www.linkedin.com/',
            'twitter_url' => 'https://twitter.com/',
            'instagram_url' => 'https://www.instagram.com/',
            'website_name_ar' => 'فيصل للبحوث والدراسات الاسلاميه',
            'website_name_en' => 'Faisal Research and Islamic Studies',
            'email' => 'faisal123@gmail.com',
            'location' => 'السعوديه الرياض',
            'membership_request' => 20.00,
            'information_request' => 40.00,
            'survey_request' => 30.00,

        ]);
    }
}
