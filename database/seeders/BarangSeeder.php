<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barang::create([
            'nama_barang' => 'Barang 1',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, nam?',
            'harga' => '1000',
            'gambar' => 'gambar.jpg',
            
        ]);

        Barang::create([
            'nama_barang' => 'Barang 2',
            'deskripsi' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, nam?',
            'harga' => '4000',
            'gambar' => 'gambar.jpg',
            
        ]);
    }
}
