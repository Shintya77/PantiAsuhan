<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galeris')->insert([

            [
                'gambar' => 'background.jpeg'
            ],
            [
                'gambar' => 'about.jpg'
            ],
            [
                'gambar' => '1.jpeg'
            ],
            [
                'gambar' => '2.jpeg'
            ],
            [
                'gambar' => '3.jpeg'
            ],
            [
                'gambar' => '4.jpeg'
            ],
            [
                'gambar' => '5.jpeg'
            ],
            [
                'gambar' => '6.jpeg'
            ],
            [
                'gambar' => '7.jpeg'
            ],
            [
                'gambar' => '8.jpeg'
            ],
            [
                'gambar' => '9.jpeg'
            ],
            [
                'gambar' => '10.jpeg'
            ],
            
        ]
        );
    }
}
