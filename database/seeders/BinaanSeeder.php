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
                'id_binaan' => '1',
                'nama_binaan' => 'Kalila Rayyan Shofie',
                'jekel' => 'P',
                'ttl' => 'Malang, 20-05-2016',
                'umur' => '7 tahun',
                'pendidikan' => 'SD Aisyiyah Malang',
                'kelas' => '1',
                'status' => 'Dhuafa'
            ],
            [
                'id_binaan' => '2',
                'nama_binaan' => 'Anisa Dea Angreani',
                'jekel' => 'P',
                'ttl' => 'Malang, 21-10-2013',
                'umur' => '9 tahun',
                'pendidikan' => 'SD Aisyiyah Malang',
                'kelas' => '2',
                'status' => 'Dhuafa'
                ]
            ]);
        }
    }