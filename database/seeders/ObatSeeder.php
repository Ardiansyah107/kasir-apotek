<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('obat')->insert([
            [
                'kode_obat' => 'OBT001',
                'nama_obat' => 'Paracetamol',
                'kategori' => 'Obat Bebas',
                'harga_beli' => 5000,
                'harga_jual' => 7000,
                'stok' => 100,
                'tanggal_kadaluarsa' => '2027-12-31',
            ],
            [
                'kode_obat' => 'OBT002',
                'nama_obat' => 'Amoxicillin',
                'kategori' => 'Antibiotik',
                'harga_beli' => 8000,
                'harga_jual' => 12000,
                'stok' => 50,
                'tanggal_kadaluarsa' => '2027-06-30',
            ],
        ]);
    }
}