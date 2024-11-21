<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaisalHomePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        ################# جدول الوثائق والمواد المطبوعه والصور والفيديوهات والمواد الصوتيه#############
        Schema::create('faisal_home_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('image')->comment('صوره خلفيه لوثيقه او قسم الصور او الفيديوهات او المواد الصوتيه');
            $table->longText('video_url')->comment('لينك الفيديو')->nullable();
            $table->longText('sound_url')->comment('لينك الملف الصوتي')->nullable();
            $table->enum('type',['image','video','sound','document'])->comment('النوع (صوره-فيديو-صوت-وثيقه)');
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
        Schema::dropIfExists('faisal_home_pages');
    }
}
