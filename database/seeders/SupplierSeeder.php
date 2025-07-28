<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supplier::create([
            'nama' => 'Supplier A',
            'alamat' => 'Jalan Raya A no 101',
            'no_telf' => '909292929',
        ]);

        Supplier::create([
            'nama' => 'Supplier B',
            'alamat' => 'Jalan Raya B no 101',
            'no_telf' => '089282822',
        ]);

        Supplier::create([
            'nama' => 'Supplier C',
            'alamat' => 'Jalan Raya C no 101',
            'no_telf' => '029393293',
        ]);

    }
}
