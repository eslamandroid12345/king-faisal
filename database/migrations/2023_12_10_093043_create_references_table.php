<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ##################### مراجع طلب الاسقصاء ترفع بواسطه الادمن من خلال لوحه التحكم #################

        Schema::create('references', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference_name')->comment('اسم المرجع');
            $table->string('reference_type')->comment('نوع المرجع مثال pdf');
            $table->integer('pages_number')->comment('عدد صفحات المرجع');
            $table->unsignedBigInteger('survey_request_id')->comment('رمز طلب الاستقصاء');
            $table->timestamps();
            $table->foreign('survey_request_id')->references('id')->on('survey_requests')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('references');
    }
}
