<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchPaperTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_paper_translations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('locale');
            $table->text('title')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('research_paper_id')->comment('اي قسم بالاوراق البحثيه');
            $table->foreign('research_paper_id','research_paper_id')->references('id')->on('research_papers')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('research_paper_translations');
    }
}
