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
        Schema::create('penjualans', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah_produk');
            $table->decimal('total_harga', total: 10, places: 2);
            $table->decimal('subtotal', total: 10, places: 2);
            $table->unsignedBigInteger('produk_id');
            $table->unsignedBigInteger('pelanggan_id'); 
            $table->unsignedBigInteger('kasir_id'); 
            $table->date('tanggal_penjualan');
            
            $table->foreign('pelanggan_id')->references('id')->on('pelanggans');
            $table->foreign('produk_id')->references('id')->on('produks');
            $table->foreign('kasir_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualans');
    }
};
