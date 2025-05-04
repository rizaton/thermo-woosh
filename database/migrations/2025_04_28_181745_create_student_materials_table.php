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
        Schema::create('student_materials', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained(
                table: 'students',
                indexName: 'student_student_material_id',
            )->onDelete('cascade');
            $table->foreignId('material_id')->constrained(
                table: 'materials',
                indexName: 'material_student_material_id',
            )->onDelete('cascade');
            $table->integer('correct_count')->default(0);
            $table->integer('total_questions')->default(0);
            $table->float('grade')->default(0); // You can calculate it based on percentage
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_materials');
    }
};
