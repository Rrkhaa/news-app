<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    // Dalam method up()
public function up(): void
{
    Schema::table('news', function (Blueprint $table) {
        // Tambahkan kolom category_id yang bisa nullable (opsional)
        $table->foreignId('category_id')->nullable()->after('wartawan_id')->constrained('categories')->onDelete('set null');
    });
}

// Dalam method down()
public function down(): void
{
    Schema::table('news', function (Blueprint $table) {
        // Drop foreign key sebelum drop kolom
        $table->dropForeign(['category_id']); 
        $table->dropColumn('category_id');
    });

    }
};
