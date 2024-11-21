<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntiqueImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antique_images', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('image')->comment('صوره القطعه الاثريه');
            $table->unsignedBigInteger('antique_id');
            $table->timestamps();
            $table->foreign('antique_id')->references('id')->on('antiques')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('antique_images');
    }
}
