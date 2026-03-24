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
        Schema::create('learning_requests', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->text('goal_description')->nullable();
            $table->string('preferred_session_type');
            $table->string('status')->default('pending');
            $table->timestamps();
            $table->foreignId('learner_id')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->foreignId('teacher_id')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->foreignId('skill_id')
            ->constrained()
            ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learning_requests');
    }
};
