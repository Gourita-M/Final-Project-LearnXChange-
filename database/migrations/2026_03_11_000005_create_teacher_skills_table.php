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
        Schema::create('teacher_skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->foreignId('skills_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->string('level');
            $table->integer('years_experience')->default(0);
            $table->boolean('is_teaching')->default(false);
            $table->boolean('is_learning')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_skills');
    }
};
