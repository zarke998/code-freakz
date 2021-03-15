<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveImageTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table("images",function(Blueprint $table){
            $table->dropConstrainedForeignId("image_type_id");
        });

        Schema::dropIfExists("image_types");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('image_types', function (Blueprint $table) {
            $table->id();
            $table->string("name");
        });

        Schema::table("images", function(Blueprint $table){
            $table->foreignId("image_type_id")->constrained();
        });
    }
}
