<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookStoreTranslationsTable extends Migration
{
    public function up()
    {
        Schema::create('book_store_translations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('book_store_id')->unsigned();
            $table->string('locale');
            $table->string('title');
            $table->longText('description')->nullable()->comment('عن الكتاب');
            $table->string('series');
            $table->string('cover');
            $table->longText('additional_information')->nullable()->comment('معلومات اضافيه');
            $table->longText('contents')->nullable()->comment('الفهرس');
            $table->foreign('book_store_id')->references('id')->on('book_stores')->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('book_store_translations');
    }
}

