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
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Kolom id sebagai primary key
            $table->string('name'); // Kolom nama produk
            $table->text('description')->nullable(); // Kolom deskripsi produk (boleh kosong)
            $table->decimal('price', 8, 2); // Kolom harga produk dengan 2 digit di belakang koma
            $table->integer('stock')->unsigned(); // Kolom stok produk (hanya menerima angka positif)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
