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
        Schema::create('lessons', function (Blueprint $table) {
            $table->id();
            $table->foreignId('section_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('slug');
            $table->longText('content')->nullable()->comment('Text/Markdown for article lessons');
            $table->unsignedInteger('duration')->nullable()->comment('Duration in seconds');
            $table->enum('type', ['video', 'quiz', 'article', 'assignment'])->default('video');
            $table->unsignedInteger('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->boolean('is_preview')->default(false)->comment('Publicly accessible');
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lessons');
    }
};
