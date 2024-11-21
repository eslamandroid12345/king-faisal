<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequestInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ##################### جدول طلبات الافاده #################
        Schema::create('request_information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('full_name')->comment('الاسم ثلاثي');
            $table->string('request_information_full_name')->nullable()->comment('الاسم المراد طبع طلب الافاده له');
            $table->string('university')->comment('الجامعه');
            $table->string('phone');
            $table->string('email');
            $table->string('request_information_subject')->comment('موضوع البحث');
            $table->longText('request_information_attachments')->comment('المرفقات');
            $table->double('total_amount',10,1);
            $table->boolean('is_confirmed')->default(false);
            $table->boolean('is_declined')->default(false);
            $table->integer('request_step')->default(2);
            $table->boolean('is_finished')->default(false);
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_information');
    }
}
