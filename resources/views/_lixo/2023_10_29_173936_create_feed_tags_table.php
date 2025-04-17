<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('feed_tags', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('feed_id')->foreign('feed_id')->references('id')->on('feeds')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedBigInteger('tag_id')->foreign('tag_id')->references('id')->on('tags')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feed_tags');
    }
};
