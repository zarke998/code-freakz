<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DeleteCourseSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("course_sections");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('course_sections', function (Blueprint $table) {
            $table->id();
            $table->string("title");

            $table->foreignId("course_id")->constrained()
                ->onDelete("cascade")
                ->onUpdate("cascade");
        });
    }
}
