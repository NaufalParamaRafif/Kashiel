<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $penjualans = array(
            array(
                'jumlah_produk' => 3,
                'total_harga' => 9375,
                'subtotal' => 9375,
                'produk_id' => 1,
                'pelanggan_id' => 1,
                'kasir_id' => 1,
                'tanggal_penjualan' => '2024-07-30'
            ),
            array(
                'jumlah_produk' => 2,
                'total_harga' => 7000,
                'subtotal' => 7000,
                'produk_id' => 2,
                'pelanggan_id' => 2,
                'kasir_id' => 2,
                'tanggal_penjualan' => '2024-07-29'
            ),
            array(
                'jumlah_produk' => 5,
                'total_harga' => 7500,
                'subtotal' => 7500,
                'produk_id' => 3,
                'pelanggan_id' => 3,
                'kasir_id' => 3,
                'tanggal_penjualan' => '2024-07-28'
            ),
            array(
                'jumlah_produk' => 4,
                'total_harga' => 16000,
                'subtotal' => 16000,
                'produk_id' => 5,
                'pelanggan_id' => 5,
                'kasir_id' => 4,
                'tanggal_penjualan' => '2024-07-27'
            ),
            array(
                'jumlah_produk' => 1,
                'total_harga' => 18000,
                'subtotal' => 18000,
                'produk_id' => 5,
                'pelanggan_id' => 5,
                'kasir_id' => 5,
                'tanggal_penjualan' => '2024-07-26'
            )
        );
        
        foreach ($penjualans as $penjualan) {
            DB::table('penjualans')->insert([
                'jumlah_produk' => $penjualan['jumlah_produk'],
                'total_harga' => $penjualan['total_harga'],
                'subtotal' => $penjualan['subtotal'],
                'produk_id' => $penjualan['produk_id'],
                'pelanggan_id' => $penjualan['pelanggan_id'],
                'kasir_id' => $penjualan['kasir_id'],
                'tanggal_penjualan' => $penjualan['tanggal_penjualan'],
            ]);
        }
    }
}
