<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        ############# جدول طلبات الاستقصاء ##################
        Schema::create('survey_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('subject_title')->comment('عنوان الموضوع المراد بحثه');
            $table->string('department')->comment('التخصص');
            $table->longText('subject_description')->comment('وصف الموضوع')->nullable();
            $table->longText('keywords')->comment('الكلمات المفتاحيه');
            $table->double('total_amount',10,1);
            $table->boolean('is_confirmed')->default(false);
            $table->boolean('is_declined')->default(false);
            $table->integer('request_step')->default(2);
            $table->boolean('is_finished')->default(false);
            $table->boolean('is_references_uploaded')->comment('هل تم رفع مراجع للطلب')->default(false);
            $table->boolean('is_references_choose')->comment('هل تم اختيار مراجع من قبل المستخدم')->default(false);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('survey_requests');
    }
}
