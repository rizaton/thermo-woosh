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
        Schema::create('material_contents', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->text('content_text')->nullable();
            $table->binary('content_image')->nullable();
            $table->string('reference')->nullable();
            $table->foreignId('material_id')->constrained(
                table: 'materials',
                indexName: 'material_material_content_id',
            )->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_contents');
    }
};
