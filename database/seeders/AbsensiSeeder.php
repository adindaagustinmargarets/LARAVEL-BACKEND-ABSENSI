<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AbsensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('absensi')->insert([
            'id' => '9d5909f3-07fb-4645-bec6-055feb2d0a99',
            'kode_peserta' => '1234',
            'nama_peserta' => 'Budi',
            'departemen' => 'Informatika',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
