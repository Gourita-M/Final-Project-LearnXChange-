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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->uuid('request_id');
            $table->uuid('learner_id');
            $table->uuid('teacher_id');
            $table->string('session_type');
            $table->string('status')->default('scheduled');
            $table->timestamp('start_time')->nullable();
            $table->timestamp('end_time')->nullable();
            $table->integer('duration')->nullable();
            $table->string('meeting_link')->nullable();
            $table->timestamps();
            $table->foreign('request_id')->references('id')->on('learning_requests')->cascadeOnDelete();
            $table->foreign('learner_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('teacher_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');
    }
};
