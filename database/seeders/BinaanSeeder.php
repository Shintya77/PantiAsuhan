<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BinaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('binaans')->insert([
            [
                'id_binaan' => 'Aning Rochani',
                'nama_binaan' => 'Kepala Panti',
                'ttl' => 'Pengurus Harian',
                'jekel' => 'Pengurus Harian',
                'ttl' => 'Pengurus Harian',
            ],
            [
                'id_binaan' => 'Aning Rochani',
                'nama_binaan' => 'Kepala Panti',
                'ttl' => 'Pengurus Harian',
                'jekel' => 'Pengurus Harian'
            ],
            [
                'id_binaan' => 'Aning Rochani',
                'nama_binaan' => 'Kepala Panti',
                'ttl' => 'Pengurus Harian',
                'jekel' => 'Pengurus Harian'
                ],
        ],
    }
}
