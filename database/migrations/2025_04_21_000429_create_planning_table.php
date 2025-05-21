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
        Schema::create('planning', function (Blueprint $table) {
            $table->id();
            $table->year('year'); // exercício
            $table->foreignId('management_id')->constrained('managements')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('action_id')->constrained('actions')->onDelete('cascade');
            $table->decimal('budget', 12, 2)->nullable(); // Orçamento em R$
            $table->text('initiative')->nullable();
            $table->text('goal')->nullable();
            $table->text('steps')->nullable();
            $table->text('indicator_quantitative')->nullable();
            $table->text('indicator_qualitative')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('planning');
    }
};
