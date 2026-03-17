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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained()->onDelete('restrict');
            $table->foreignId('instructor_id')->constrained('users')->onDelete('restrict');
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('short_description')->comment('Brief course summary');
            $table->longText('description')->comment('Detailed course documentation');
            
            // SEO Fields
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            
            $table->decimal('price', 8, 2);
            $table->decimal('discount_price', 8, 2)->nullable();
            $table->enum('level', ['beginner', 'intermediate', 'advanced'])->default('beginner');
            $table->enum('status', ['draft', 'published', 'archived'])->default('draft');
            
            // Metrics (denormalized for performance)
            $table->unsignedInteger('total_students')->default(0)->comment('Total enrollment count');
            $table->decimal('average_rating', 3, 2)->default(0.00);
            
            $table->json('requirements')->nullable()->comment('List of pre-requisites');
            $table->json('outcomes')->nullable()->comment('Learning outcomes');
            
            $table->timestamps();
            $table->softDeletes();
            
            // Indexes for better searching
            $table->index('status');
            $table->index('level');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
