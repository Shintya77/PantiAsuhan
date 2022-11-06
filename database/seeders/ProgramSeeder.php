<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programs')->insert([

            [
                'nama_program' => 'Pendidikan',
                'dns_butuh' => 'Rp 10.000.000'
            ]
        ]
        );
    }
}
