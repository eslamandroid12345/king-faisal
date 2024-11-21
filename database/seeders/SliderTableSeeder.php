<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 1 ; $i <= 6 ; $i++){

            Slider::create([

               'url' => 'https://www.kfcris.com/ar',
               'background_image' => 'storage/sliders/images/'.$i.".jpg",
            ]);
        }

    }


}
