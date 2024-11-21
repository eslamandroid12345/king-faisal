<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        ################ محتوي السله ########################
        Schema::create('cart_contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cart_id');
            $table->unsignedBigInteger('book_store_id')->comment('رمز الكتاب')->nullable();
            $table->unsignedBigInteger('antique_id')->nullable();
            $table->timestamps();
            $table->foreign('cart_id')->references('id')->on('carts')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('book_store_id')->references('id')->on('book_stores')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('antique_id')->references('id')->on('antiques')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_contents');
    }
}
