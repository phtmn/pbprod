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
        Schema::create('feed_tools', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('feed_id')->foreign('feed_id')->references('id')->on('feeds')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->unsignedBigInteger('tool_id')->foreign('tool_id')->references('id')->on('tools')->onUpdate('CASCADE')->onDelete('CASCADE');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feed_tools');
    }
};
