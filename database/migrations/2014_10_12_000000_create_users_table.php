<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {

        ########################### جدول المستخدمين بالموقع ############
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_member')->default(0);
            $table->string('full_name')->comment('الاسم ثلاثي');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('membership_from_date')->comment('تايخ بدايه العضويه')->nullable();
            $table->date('membership_to_date')->comment('تاريخ نهايه العضويه')->nullable();
            $table->unsignedBigInteger('membership_number')->comment('رقم العضويه')->nullable();
            $table->string('phone')->unique();
            $table->boolean('privacy_and_policy')->comment('الموافقه علي الشروط والسياسات')->default(1);
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
