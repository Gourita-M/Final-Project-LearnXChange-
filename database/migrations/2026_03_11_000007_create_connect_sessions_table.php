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
        Schema::create('connect_sessions', function (Blueprint $table) {
            $table->id();
            $table->string('session_type');
            $table->string('status')->default('scheduled');
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->integer('duration')->nullable();
            $table->string('meeting_link')->nullable();
            $table->timestamps();
            $table->foreignId('learning_requests_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->foreignId('learner_id')
            ->constrained('users')
            ->cascadeOnDelete();
            $table->foreignId('teacher_id')
            ->constrained('users')
            ->cascadeOnDelete();
    
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('connect_sessions');
    }
};
