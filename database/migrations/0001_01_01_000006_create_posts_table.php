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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('varietas_id')->constrained('varietas')->onDelete('cascade'); // Referensi ke varietas
            $table->string('title'); // Judul produk jadi
            $table->text('content'); // Konten/Deskripsi produk jadi
            $table->string('image')->nullable(); // Gambar produk jadi
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
