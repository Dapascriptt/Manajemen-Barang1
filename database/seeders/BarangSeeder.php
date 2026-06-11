<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        Barang::create([
            'nama_barang' => 'Monitor LED 24 inci',
            'kategori' => 'Elektronik',
            'stok' => 12,
            'harga' => 1800000,
            'deskripsi' => 'Monitor untuk penggunaan kantor dan sekolah.',
        ]);

        Barang::create([
            'nama_barang' => 'Meja Belajar Kayu',
            'kategori' => 'Furniture',
            'stok' => 8,
            'harga' => 450000,
            'deskripsi' => 'Meja belajar dengan desain sederhana dan tahan lama.',
        ]);

        Barang::create([
            'nama_barang' => 'Printer Multi Fungsi',
            'kategori' => 'Elektronik',
            'stok' => 5,
            'harga' => 2750000,
            'deskripsi' => 'Printer, scanner, dan fotokopi dalam satu perangkat.',
        ]);
    }
}
