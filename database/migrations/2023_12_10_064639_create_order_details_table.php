<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        ############### جدول تفاصيل الطلبات ################
        Schema::create('order_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('book_store_id')->nullable();
            $table->unsignedBigInteger('antique_id')->nullable();
            $table->double('unit_price')->comment('سعر التحفه الاثريه او الكتاب');
            $table->timestamps();
            $table->foreign('book_store_id')->references('id')->on('book_stores')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('antique_id')->references('id')->on('antiques')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('order_id')->references('id')->on('orders')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_details');
    }
}
