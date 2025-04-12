<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('peserta')->insert([
            'id' => '9d5909f3-07fb-4645-bec6-055feb2d2c99',
            'kode_peserta' => '1234',
            'nama' => 'Budi',
            'departemen' => 'Informatika',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
