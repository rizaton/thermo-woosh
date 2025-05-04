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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->integer('question_number');
            $table->enum('question_answer', ['A', 'B', 'C', 'D', 'E']);
            $table->text('question_text');
            $table->binary('question_image')->nullable();
            $table->foreignId('quiz_id')->constrained(
                table: 'quizzes',
                indexName: 'question_quiz_id',
            )->onDelete('cascade');
            $table->timestamps();
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
