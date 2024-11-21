<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('payments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_confirmed')->default(false);
            $table->boolean('is_declined')->default(false);
            $table->double('total_amount',10,2);
            $table->enum('payment_type', ['CASH', 'EPAYMENT']);
            $table->longText('receipt_image')->comment('صوره ايصال الدفع')->nullable();
            $table->string('bank_account_name')->comment('اسم صاحب الحساب')->nullable();
            $table->string('bank_account_number')->comment('رقم الحساب المحول منه')->nullable();
            $table->string('from_bank')->nullable();
            $table->string('to_bank')->nullable();
            $table->date('transfer_date');
            $table->time('transfer_time')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('request_information_id')->nullable();
            $table->unsignedBigInteger('member_ship_request_id')->nullable();
            $table->unsignedBigInteger('survey_request_id')->nullable();
            $table->timestamps();
            $table->foreign('order_id')->references('id')->on('orders')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('request_information_id')->references('id')->on('request_information')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('member_ship_request_id')->references('id')->on('member_ship_requests')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('payments');
    }
}
