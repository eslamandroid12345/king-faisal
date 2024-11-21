<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaCenterDepartmentTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('media_center_department_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('locale');
            $table->text('title')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('media_center_department_id')->comment('رمز المركز الاعلامي');
            $table->foreign('media_center_department_id','media_center_department_id')->references('id')->on('media_center_departments')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('media_center_department_translations');
    }
}
