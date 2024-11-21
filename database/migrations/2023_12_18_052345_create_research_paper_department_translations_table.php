<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchPaperDepartmentTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('research_paper_department_translations', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('locale');
            $table->string('title')->nullable();
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('research_paper_department_id')->comment('اي قسم بالاوراق البحثيه');
            $table->foreign('research_paper_department_id','research_paper_department_id')->references('id')->on('research_paper_departments')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('research_paper_department_translations');
    }
}
