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
            ]
        ]
        );
    }
}