<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('prompt_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prompt_id')->foreign('prompt_id')->references('id')->on('prompts')->onDelete('cascade');;
            $table->unsignedBigInteger('tag_id')->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('prompt_tag');
    }
};
