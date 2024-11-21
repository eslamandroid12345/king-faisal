<?php

namespace Database\Seeders;

use App\Models\MediaCenterDepartment;
use Illuminate\Database\Seeder;

class AnnualOfferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1 ; $i <= 16 ; $i++){

            $mediaDepartmentCenter = new MediaCenterDepartment();
            $mediaDepartmentCenter->image_url = "storage/media_center_departments/images/annual_offers/".$i.".png";
            $mediaDepartmentCenter->pdf_url = "storage/media_center_departments/pdf/".$i.".pdf";
            $mediaDepartmentCenter->type = "annual_offer";
            $mediaDepartmentCenter->save();
            $mediaDepartmentCenter->translateOrNew("ar")->title =  "العرض السنوي";
            $mediaDepartmentCenter->translateOrNew("en")->title = "Annual Offer";
            $mediaDepartmentCenter->translateOrNew("ch")->title = "年度優惠";
            $mediaDepartmentCenter->save();
        }
    }
}
