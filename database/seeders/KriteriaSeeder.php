<?php

namespace Database\Seeders;

use App\Models\Kriteria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'id_kriteria' => 'KRITERIA-1',
                'nama_kriteria' => 'OFFICE',
                'tingkat_kerusakan' => 'RINGAN',
                'bobot_kriteria' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id_kriteria' => 'KRITERIA-2',
                'nama_kriteria' => 'DRIVER',
                'tingkat_kerusakan' => 'RINGAN',
                'bobot_kriteria' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id_kriteria' => 'KRITERIA-3',
                'nama_kriteria' => 'SISTEM OPERASI',
                'tingkat_kerusakan' => 'RINGAN',
                'bobot_kriteria' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id_kriteria' => 'KRITERIA-4',
                'nama_kriteria' => 'BATERAI',
                'tingkat_kerusakan' => 'SEDANG',
                'bobot_kriteria' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id_kriteria' => 'KRITERIA-5',
                'nama_kriteria' => 'KEYBOARD',
                'tingkat_kerusakan' => 'SEDANG',
                'bobot_kriteria' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id_kriteria' => 'KRITERIA-6',
                'nama_kriteria' => 'TOUCHPAD',
                'tingkat_kerusakan' => 'SEDANG',
                'bobot_kriteria' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id_kriteria' => 'KRITERIA-7',
                'nama_kriteria' => 'KARTU WIFI',
                'tingkat_kerusakan' => 'SEDANG',
                'bobot_kriteria' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id_kriteria' => 'KRITERIA-8',
                'nama_kriteria' => 'CASING',
                'tingkat_kerusakan' => 'SEDANG',
                'bobot_kriteria' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id_kriteria' => 'KRITERIA-9',
                'nama_kriteria' => 'RAM',
                'tingkat_kerusakan' => 'SEDANG',
                'bobot_kriteria' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id_kriteria' => 'KRITERIA-10',
                'nama_kriteria' => 'HARDISK',
                'tingkat_kerusakan' => 'SEDANG',
                'bobot_kriteria' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id_kriteria' => 'KRITERIA-11',
                'nama_kriteria' => 'LCD',
                'tingkat_kerusakan' => 'SEDANG',
                'bobot_kriteria' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id_kriteria' => 'KRITERIA-12',
                'nama_kriteria' => 'FAN',
                'tingkat_kerusakan' => 'SEDANG',
                'bobot_kriteria' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id_kriteria' => 'KRITERIA-13',
                'nama_kriteria' => 'MESIN',
                'tingkat_kerusakan' => 'BERAT',
                'bobot_kriteria' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ], [
                'id_kriteria' => 'KRITERIA-14',
                'nama_kriteria' => 'PROCESSOR',
                'tingkat_kerusakan' => 'BERAT',
                'bobot_kriteria' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($data as $key) {
            Kriteria::create($key);
        }
    }
}
