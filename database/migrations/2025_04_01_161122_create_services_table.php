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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('subtitle')->nullable();
            $table->string('image')->nullable();
            $table->text('why_it_matters')->nullable();
            $table->text('approach_title')->nullable();
            $table->text('approach_subtitle')->nullable();
            $table->json('approach_items')->nullable(); // Store as JSON array
            $table->json('faqs')->nullable(); // Store as JSON array
            $table->boolean('is_active')->default(true);
            //SEO fields 
            $table->string('meta_title')->nullable(); 
            $table->text('meta_description')->nullable(); 
            $table->text('meta_keywords')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
