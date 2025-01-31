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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('ayat');
            $table->text('content');
            $table->unsignedBigInteger('category_id'); // kolom foreign key
            $table->timestamps();

            // Menambahkan foreign key constraint
            $table->foreign('category_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade'); // Menghapus artikel jika kategori dihapus
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('articles', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // Menghapus foreign key
        });
        Schema::dropIfExists('articles');
    }
};
