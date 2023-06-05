<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'NamaBarang' => 'Jeruk',
                'DeskripsiBarang' => 'Jeruk Jawa',
                'HargaBarang' => 20000,
                'satuan_id' => 1
            ],
            [
                'NamaBarang' => 'Kain',
                'DeskripsiBarang' => 'Kain Madura',
                'HargaBarang' => 100000,
                'satuan_id' => 2
            ],
            [
                'NamaBarang' => 'HandPhone',
                'DeskripsiBarang' => 'Hp Aipon',
                'HargaBarang' => 14000000,
                'satuan_id' => 3
            ]
        ]);
    }
}