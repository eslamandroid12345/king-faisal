<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAspirationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        ################### جدول الرؤيه والقيم والرساله بالصفحه الرئيسيه #####
        Schema::create('aspirations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longText('icon');
            $table->enum('type',['message','vision','value'])->comment('الرؤيه او الرساله او القيم');
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
        Schema::dropIfExists('aspirations');
    }
}
