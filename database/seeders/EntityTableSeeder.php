<?php

namespace Database\Seeders;

use App\Models\Entity;
use App\Models\PointOfSale;
use Illuminate\Database\Seeder;

class EntityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $entity = new Entity();
        $entity->save();
        $entity->translateOrNew("ar")->name = "مكتبه";
        $entity->translateOrNew("en")->name = "Library";
        $entity->translateOrNew("ch")->name = "中心銷售點";
        $entity->save();


        $entity = new Entity();
        $entity->save();
        $entity->translateOrNew("ar")->name = "متحف";
        $entity->translateOrNew("en")->name = "museum";
        $entity->translateOrNew("ch")->name = "中心銷售點";
        $entity->save();



        $entity = new Entity();
        $entity->save();
        $entity->translateOrNew("ar")->name = "معرض الكتاب";
        $entity->translateOrNew("en")->name = "Book Fair";
        $entity->translateOrNew("ch")->name = "書展";
        $entity->save();

        $entity = new Entity();
        $entity->save();
        $entity->translateOrNew("ar")->name = "مؤسسه الملك فيصل";
        $entity->translateOrNew("en")->name = "Founded by King Faisal Foundation";
        $entity->translateOrNew("ch")->name = "由費薩爾國王基金會創立";
        $entity->save();



    }
}
