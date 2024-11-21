<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChairmanOfTheBoardNewTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chairman_of_the_board_new_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale');
            $table->text('title')->nullable();
            $table->longText('description')->nullable();
            $table->integer('chairman_of_the_board_new_id')->unsigned()->comment('رمز المركز الاعلامي');
            $table->foreign('chairman_of_the_board_new_id','chairman_of_the_board_new_id')->references('id')->on('chairman_of_the_board_news')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('chairman_of_the_board_new_translations');
    }
}
