<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaisalHomeTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ############# محتوي دار الفيصل ################
        Schema::create('faisal_home_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale');
            $table->longText('content')->nullable();
            $table->integer('faisal_home_id')->unsigned();
            $table->foreign('faisal_home_id','faisal_home_id')->references('id')->on('faisal_home')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('faisal_home_translations');
    }
}
