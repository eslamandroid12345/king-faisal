<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\PointOfSale;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PointOfSaleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      for ($i = 1 ; $i <= 3 ; $i ++){

          for($j = 1 ; $j <= 4 ; $j++){

              $pointOfSale = new PointOfSale();
              $pointOfSale->city_id = $i;
              $pointOfSale->save();
              $pointOfSale->translateOrNew("ar")->name = "نقطة البيع الخاصة بالمركز";
              $pointOfSale->translateOrNew("en")->name = "The center's point of sale";
              $pointOfSale->translateOrNew("ch")->name = "中心銷售點";
              $pointOfSale->translateOrNew("ar")->description = "من يوم الأحد وحتى يوم الخميس من الساعة 10 صباحًا وحتى الساعة 6 مساءً.";
              $pointOfSale->translateOrNew("en")->description = "From Sunday to Thursday from 10 am to 6 pm.";
              $pointOfSale->translateOrNew("ch")->description = "週日至週四 10 點至 6 點。";
              $pointOfSale->save();
          }
      }

    }
}
