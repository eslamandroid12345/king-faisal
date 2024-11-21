<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManagementTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('management_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale');
            $table->string('role')->comment('الوظيفه مثال الامين العام')->nullable();
            $table->longText('description')->nullable();
            $table->integer('management_id')->unsigned();
            $table->foreign('management_id','management_id')->references('id')->on('managements')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('management_translations');
    }
}
