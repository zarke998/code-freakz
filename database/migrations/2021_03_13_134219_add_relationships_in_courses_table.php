<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipsInCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->foreignId("author_id")->constrained();

            $table->foreignId("category_id")->constrained();
            $table->foreignId("language_id")->constrained();
            $table->foreignId("difficulty_id")->constrained();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->dropConstrainedForeignId("author_id");

            $table->dropConstrainedForeignId("category_id");
            $table->dropConstrainedForeignId("language_id");
            $table->dropConstrainedForeignId("difficulty_id");
        });
    }
}
