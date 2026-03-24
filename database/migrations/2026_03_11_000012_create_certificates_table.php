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
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('status')->default('pending');
            $table->timestamp('request_date')->useCurrent();
            $table->timestamp('approval_date')->nullable();
            $table->string('certificate_url')->nullable();
            $table->timestamps();
            $table->foreignId('users_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->foreignId('skills_id')
            ->constrained()
            ->cascadeOnDelete();
            $table->foreignId('approved_by')
            ->constrained('users')
            ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
