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
        Schema::create('syllabus', function (Blueprint $table) {
            $table->id();
            $table->integer('sylabu');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('course_id')->constrained()->onDelete('cascade');
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->foreignId('lesson_id')->constrained()->onDelete('cascade');

            $table->boolean('activo')->default(true);
            $table->timestamps();

            $table->unique(['user_id', 'course_id', 'section_id', 'lesson_id'], 'unique_sylabu');

            $table->index(['user_id', 'activo']);
            $table->index(['course_id', 'activo']);
            $table->index(['section_id', 'activo']);
            $table->index(['lesson_id', 'activo']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('syllabus');
    }
};
