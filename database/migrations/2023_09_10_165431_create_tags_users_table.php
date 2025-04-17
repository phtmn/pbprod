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
        Schema::create('tags_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('tag_id')->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade')->nullable();
            $table->unsignedBigInteger('user_id')->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
            $table->string('permission');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags_users');
    }
};
