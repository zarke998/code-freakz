<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RenameLanguageCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists("language_course");

        Schema::create('course_language', function (Blueprint $table) {
            $table->id();

            $table->foreignId("course_id")->constrained();
            $table->foreignId("language_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("course_language");

        Schema::create('language_course', function (Blueprint $table) {
            $table->id();

            $table->foreignId("course")->constrained();
            $table->foreignId("language")->constrained();
        });
    }
}
