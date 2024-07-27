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
        Schema::create('detailpenjualans', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('jumlah_produk');
            $table->decimal('subtotal', total: 10, places: 2);
            $table->unsignedBigInteger('penjualan_id');
            $table->unsignedBigInteger('produk_id');

            $table->foreign('penjualan_id')->references('id')->on('penjualans');
            $table->foreign('produk_id')->references('id')->on('produks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailpenjualans');
    }
};
