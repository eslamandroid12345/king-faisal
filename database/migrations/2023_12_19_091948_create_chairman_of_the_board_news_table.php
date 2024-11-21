<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChairmanOfTheBoardNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        #################### جدول اخبار رئيس مجلس الاداره ##################
        Schema::create('chairman_of_the_board_news', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('background_image');
            $table->date('published_date')->comment('تاريخ النشر')->default(date('Y-m-d'));
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
        Schema::dropIfExists('chairman_of_the_board_news');
    }
}
