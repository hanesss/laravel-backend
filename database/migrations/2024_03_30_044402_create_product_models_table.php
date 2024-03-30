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
        Schema::create('product_models', function (Blueprint $table) {
            $table->id();
            $table->string('nama_produk');
            $table->string('deskripsi_produk');
            $table->integer('jumlah_produk');
            $table->integer('harga_produk');
            $table->enum('kategori', ['pakaian', 'elektronik', 'makanan']);
            $table->enum('status', ['ada', 'habis']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_models');
    }
};