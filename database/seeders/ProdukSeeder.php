<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produks = array(
            array(
                'nama_produk' => 'Indomie Goreng',
                'harga' => 3125,
                'stok' => 500
            ),
            array(
                'nama_produk' => 'Aqua Botol 600ml',
                'harga' => 3500,
                'stok' => 300
            ),
            array(
                'nama_produk' => 'Kopi Kapal Api',
                'harga' => 1500,
                'stok' => 200
            ),
            array(
                'nama_produk' => 'Teh Botol Sosro',
                'harga' => 4000,
                'stok' => 150
            ),
            array(
                'nama_produk' => 'SilverQueen Coklat',
                'harga' => 18000,
                'stok' => 100
            )
        );
        

        foreach ($produks as $produk) {
            DB::table('produks')->insert([
                'nama_produk' => $produk['nama_produk'],
                'harga' => $produk['harga'],
                'stok' => $produk['stok'],
            ]);
        }
    }
}
