<?php

// database/migrations/2025_06_02_144227_create_books_table.php

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
        Schema::create('books', function (Blueprint $table) {
            $table->id(); // Primary key for the books table
            // Add other columns for your books table, for example:
            $table->string('title');
            $table->string('author');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            // $table->string('slug')->unique();
            $table->string('status')->default('draft'); // Example status column

            // Correct way to define the foreign key relationship in modern Laravel
            // This creates an unsignedBigInteger column and sets up the foreign key constraint
            // It automatically knows to reference the 'id' column on the 'categories' table
            $table->foreignId('category_id')
                ->nullable() // Allow books to not have a category (if you want 'on delete set null')
                ->constrained('categories') // References the 'categories' table
                ->onDelete('set null'); // When a category is deleted, set category_id to null for related books

            $table->timestamps(); // created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
