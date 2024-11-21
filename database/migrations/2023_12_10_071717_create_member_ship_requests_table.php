<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberShipRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        ###################### جدول طلبات العضويه ##################
        Schema::create('member_ship_requests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('full_name');
            $table->string('academic_organization')->comment('الجهه العلميه');
            $table->string('academic_degree')->comment('الدرجه العلميه');
            $table->string('email');
            $table->integer('years_of_subscription')->comment('عدد سنوات الاشتراك');
            $table->string('phone');
            $table->double('total_amount',10,1);
            $table->boolean('is_confirmed')->default(false);
            $table->boolean('is_declined')->default(false);
            $table->unsignedBigInteger('user_id');
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
        Schema::dropIfExists('member_ship_requests');
    }
}
