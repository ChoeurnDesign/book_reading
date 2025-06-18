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
        Schema::table('books', function (Blueprint $table) {
            // Drop the foreign key constraint first if it exists
            if (Schema::hasColumn('books', 'category_id') && Schema::hasTable('categories')) {
                $table->dropForeign(['category_id']);
            }
            // Then drop the column
            if (Schema::hasColumn('books', 'category_id')) {
                $table->dropColumn('category_id');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            // Re-add the column and foreign key if rolling back
            $table->foreignId('category_id')
                ->nullable() // Keep nullable if previous intention was 'set null'
                ->constrained('categories')
                ->onDelete('set null');
        });
    }
};
