<?php

use App\Models\Question;
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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->integer('n_question');
            $table->integer('n_article');
            $table->text('question');
            $table->text('option1')->nullable();;
            $table->text('option2')->nullable();;
            $table->text('option3')->nullable();;
            $table->text('option4')->nullable();;
            $table->string('answer');
            $table->string('justificado1')->nullable();
            $table->string('justificado2')->nullable();
            $table->string('justificado3')->nullable();
            $table->text('observation')->nullable();

            $table->unsignedBigInteger('level_id')->nullable();
            $table->foreign('level_id')->references('id')->on('levels')->onDelete('set null');

            $table->unsignedBigInteger('type_question_id')->nullable();
            $table->foreign('type_question_id')->references('id')->on('type_questions')->onDelete('set null');

            $table->unsignedBigInteger('category_question_id')->nullable();
            $table->foreign('category_question_id')->references('id')->on('category_questions')->onDelete('set null');

            $table->unsignedBigInteger('scale_id')->nullable();
            $table->foreign('scale_id')->references('id')->on('scales')->onDelete('set null');

            $table->unsignedBigInteger('course_id')->nullable();
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('set null');

            $table->unsignedBigInteger('section_id')->nullable();
            $table->foreign('section_id')->references('id')->on('sections')->onDelete('set null'); // corregido 'section' por 'sections'

            $table->unsignedBigInteger('lesson_id')->nullable();
            $table->foreign('lesson_id')->references('id')->on('lessons')->onDelete('set null');

            $table->timestamps(); // Agregado para gestionar las marcas de tiempo (created_at y updated_at)
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
