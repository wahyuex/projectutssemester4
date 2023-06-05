<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('satuans')->insert([
            [
                'code' => '1',
                'name' => 'Kilo Gram|KG|',
                'description' => 'Kilo Gram|KG|'
            ],
            [
                'code' => '2',
                'name' => 'METER|M|',
                'description' => 'METER|M|'
            ],
            [
                'code' => '3',
                'name' => 'Unit|U|',
                'description' => 'Unit|U|'
            ],
        ]);
    }
}