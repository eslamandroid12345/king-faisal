<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutChairmanOfTheBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        ##################### جدول الدرجات الفخريه والجوائز وتاريخ المركز (عن رئيس مجلس الاداره)#####################
        Schema::create('about_chairman_of_the_boards', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type',['award','center_date','honorary_degree'])->comment('النوع : جائزه - تاريخ السنتر - درجه فخريه');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('about_chairman_of_the_boards');
    }
}
