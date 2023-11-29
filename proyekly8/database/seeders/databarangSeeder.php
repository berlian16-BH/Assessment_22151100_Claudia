<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class databarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('databarangs')->insert([
            'namabarang' => 'Nasi goreng',
            'Satuan' => '1',
            'HargaSatuan' => '12000',
            'Stok' => '10',

        ]);
    }
}
