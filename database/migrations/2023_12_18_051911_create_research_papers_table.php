<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResearchPapersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        #################### الاوراق البحثيه ##############
        Schema::create('research_papers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('editor')->comment('محرر هذا البحث');
            $table->longText('background_image');
            $table->boolean('show_home_page')->default(0);
            $table->unsignedBigInteger('research_department_id')->comment('اي قسم بالاوراق البحثيه');
            $table->timestamps();
            $table->foreign('research_department_id')->references('id')->on('research_paper_departments')->cascadeOnUpdate()->cascadeOnDelete();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('research_papers');
    }
}
