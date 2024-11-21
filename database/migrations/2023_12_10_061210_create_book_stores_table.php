<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        ################## متجر الكتب ################
        Schema::create('book_stores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('book_type',['soft_copy','hard_copy'])->comment('سوفت كوبي كتاب pdf والهارد كوبي كتاب مطبوع');
            $table->string('published_year')->comment('سنه الاصدار');
            $table->longText('background_image');
            $table->double('price',10,2);
            $table->integer('printing_number')->comment('الطبعه');
            $table->boolean('show_home_page')->default(0);
            $table->unsignedBigInteger('book_category_id')->comment('تبع انهي قسم');
            $table->unsignedBigInteger('author_id')->comment('المؤلف');
            $table->timestamps();
            $table->foreign('book_category_id')->references('id')->on('book_categories')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('author_id')->references('id')->on('authors')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_stores');
    }
}
