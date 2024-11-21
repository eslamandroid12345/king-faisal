<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesAroundTheWorldTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_around_the_world_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('locale');
            $table->text('title')->nullable();
            $table->integer('roles_around_the_world_id')->unsigned();
            $table->foreign('roles_around_the_world_id','roles_around_the_world_id')->references('id')->on('roles_around_the_world')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('roles_around_the_world_translations');
    }
}
