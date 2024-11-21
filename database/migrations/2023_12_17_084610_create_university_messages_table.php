<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversityMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ########### جدول تسجيل الرسائل الجامعيه ############
        Schema::create('university_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('full_name');
            $table->string('phone');
            $table->string('email');
            $table->string('university')->comment('الجامعه');
            $table->string('college')->comment('الكليه');
            $table->string('department')->comment('القسم');
            $table->string('subject')->comment('عنوان الرساله');
            $table->string('level')->comment('مستوي الرساله');
            $table->longText('attachments')->comment('ملف pdf مرفق');
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
        Schema::dropIfExists('university_messages');
    }
}
