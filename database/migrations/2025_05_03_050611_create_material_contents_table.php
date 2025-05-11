<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            // $table->binary('content_image', 255)->nullable();
            $table->string('reference')->nullable();
            $table->boolean('is_title')->default(false);
            $table->boolean('is_hidden')->default(false);
            $table->boolean('is_list')->default(false);
            $table->foreignId('material_id')->constrained(
                table: 'materials',
                indexName: 'material_material_content_id',
            )->onDelete('cascade');
            $table->timestamps();
        });
        DB::statement("ALTER TABLE material_contents ADD content_image MEDIUMBLOB NULL");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_contents');
    }
};
