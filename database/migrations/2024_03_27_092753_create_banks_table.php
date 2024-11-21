<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBanksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
         * جدول بنوك التحويل
         */
        Schema::create('banks', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('image')->nullable();
            $table->string('account_number')->comment('رقم الحساب');
            $table->string('iban_number')->comment('رقم الحساب iban');
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('banks');
    }
}
