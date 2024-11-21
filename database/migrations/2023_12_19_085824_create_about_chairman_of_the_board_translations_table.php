<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutChairmanOfTheBoardTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_chairman_of_the_board_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale');
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->integer('about_chairman_of_the_board_id')->unsigned();
            $table->foreign('about_chairman_of_the_board_id','about_chairman_of_the_board_id')->references('id')->on('about_chairman_of_the_boards')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('about_chairman_of_the_board_translations');
    }
}
