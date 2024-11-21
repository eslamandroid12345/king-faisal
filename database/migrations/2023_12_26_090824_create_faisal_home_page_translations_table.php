<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaisalHomePageTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faisal_home_page_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale');
            $table->longText('title')->nullable();
            $table->longText('description')->nullable();
            $table->integer('faisal_home_page_id')->unsigned();
            $table->foreign('faisal_home_page_id','faisal_home_page_id')->references('id')->on('faisal_home_pages')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('faisal_home_page_translations');
    }
}
