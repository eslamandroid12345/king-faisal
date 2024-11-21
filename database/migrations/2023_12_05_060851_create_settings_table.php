<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        ##################### اعدادات الموقع ##################
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->longText('logo')->comment('لوجو الموقع');
            $table->longText('king_faisal_and_family_image')->comment('الملك فيصل واسرته');
            $table->string('website_name_ar');
            $table->string('website_name_en');
            $table->string('website_name_ch')->nullable();
            $table->string('email');
            $table->longText('location');
            $table->longText('facebook_url')->nullable();
            $table->longText('youtube_url')->nullable();
            $table->longText('linkedin_url')->nullable();
            $table->longText('twitter_url')->nullable();
            $table->longText('instagram_url')->nullable();
            $table->double('membership_request',10,2)->default(0)->comment('قيمه الاشتراك للعضويه');
            $table->double('information_request',10,2)->default(0)->comment('قيمه الاشتراك لطلب الافاده');
            $table->double('survey_request',10,2)->default(0)->comment('قيمه الاشتراك لطلب الاستقصاء');
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
        Schema::dropIfExists('settings');
    }
}
