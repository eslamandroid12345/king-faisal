<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAntiqueTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antique_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('antique_id')->unsigned();
            $table->string('locale');
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('category')->nullable();
            $table->string('period')->nullable()->comment('التحفه راجعه لانهي فتره من الزمن');
            $table->string('material')->nullable()->comment('الخامه');
            $table->string('origin')->nullable();
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
        Schema::dropIfExists('antique_translations');
    }
}
