<?php

// database/migrations/2025_06_01_000000_create_categories_table.php

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
        // This migration's purpose is to CREATE the 'categories' table.
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // This creates an auto-incrementing UNSIGNED BIGINT primary key 'id'
            $table->string('name')->unique(); // Example: name of the category
            $table->string('slug')->unique(); // Example: slug for the category
            $table->text('description')->nullable(); // Optional description
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // When rolling back, drop the 'categories' table if it exists.
        Schema::dropIfExists('categories');
    }
};
