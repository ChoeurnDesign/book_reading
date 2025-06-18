<?php

// database/migrations/YOUR_TIMESTAMP_create_book_categories_table.php

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
        Schema::create('book_categories', function (Blueprint $table) {
            // No primary key needed for a pivot table, composite primary key is on the foreign keys
            // You can add a simple ID if you need to reference specific pivot entries, but usually not needed.
            // $table->id(); // Uncomment if you want a conventional ID for the pivot table

            $table->foreignId('book_id')->constrained()->onDelete('cascade'); // Foreign key to books table
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Foreign key to categories table

            // Define a composite primary key to ensure unique book-category combinations
            $table->primary(['book_id', 'category_id']);

            $table->timestamps(); // Optional, but good practice for tracking association creation/updates
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_categories');
    }
};
