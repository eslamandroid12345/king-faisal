<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMediaCenterDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ################# جدول المركز الاعلامي (الاخبار-الفيديوهات-الفعليات السابقه - الفعليات القادمه  -العرض السنوي)###############
        Schema::create('media_center_departments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('type',['new','video','previous_events','next_events','annual_offer'])->comment('خبر او فيديو او فعاليات سابقه او فعاليات قادمه او عرض سنوي');
            $table->longText('image_url')->nullable()->comment('صوره الخبر او خلفيه الفيديو او العرض السنوي او الفعليات');
            $table->longText('video_url')->comment('في حاله لو النوع فيديو')->nullable();
            $table->longText('pdf_url')->comment('في حاله العرض السنوي فقط')->nullable();
            $table->time('time_from')->comment('في حاله الفعاليات فقط')->nullable();
            $table->time('time_to')->comment('في حاله الفعاليات فقط')->nullable();
            $table->text('speakers')->comment('في حاله الفعاليات فقط')->nullable();
            $table->string('location')->comment('في حاله الفعاليات فقط')->nullable();
            $table->date('published_date')->nullable()->comment('تاريخ النشر');
            $table->year('published_year')->comment('سنه الاصدار في حاله العرض السنوي')->nullable();
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
        Schema::dropIfExists('media_center_departments');
    }
}
