<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pelanggans = array(
            array(
                'nama_pelanggan' => 'Budi',
                'alamat' => 'Jalan Citra Sari, Cilodong, Depok, Jawa Barat, Indonesia',
                'nomor_tlp' => '089606369420'
            ),
            array(
                'nama_pelanggan' => 'Bayu',
                'alamat' => 'Jalan Merdeka, Sukmajaya, Depok, Jawa Barat, Indonesia',
                'nomor_tlp' => '088787789973'
            ),
            array(
                'nama_pelanggan' => 'Rafi',
                'alamat' => 'Jalan Kebon Raya, Pancoran Mas, Depok, Jawa Barat, Indonesia',
                'nomor_tlp' => '081234567890'
            ),
            array(
                'nama_pelanggan' => 'Asep',
                'alamat' => 'Jalan Margonda, Beji, Depok, Jawa Barat, Indonesia',
                'nomor_tlp' => '082345678901'
            ),
            array(
                'nama_pelanggan' => 'Dewi',
                'alamat' => 'Jalan Raya Bogor, Cimanggis, Depok, Jawa Barat, Indonesia',
                'nomor_tlp' => '083456789012'
            ),
        );        

        foreach ($pelanggans as $pelanggan) {
            DB::table('pelanggans')->insert([
                'nama_pelanggan' => $pelanggan['nama_pelanggan'],
                'alamat' => $pelanggan['alamat'],
                'nomor_tlp' => $pelanggan['nomor_tlp'],
            ]);
        }
    }
}
