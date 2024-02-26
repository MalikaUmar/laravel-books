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
            $table->unique('id');
            $table->unique('slug');
            $table->unique('isbn');
            $table->index('title');
            $table->index('category_id');
            $table->index('price');
            $table->index('publication_date');
            $table->unique('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('books', function (Blueprint $table) {
            $table->dropIndex('id');
            $table->dropIndex('title');
            $table->dropIndex('category_id');
            $table->dropIndex('price');
            $table->dropIndex('publication_date');
            $table->dropIndex('slug');
            $table->dropIndex('isbn');
            $table->dropIndex('description');

           // 'slug' for example BOOK NAME -> book-name
            
        })
    }
}
