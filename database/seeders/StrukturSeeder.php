<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class StrukturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //    DB::table('strukturs')->insert([
    //        [
    //            'name' => 'Aning Rochani',
    //            'jabatan' => 'Kepala Panti'
    //        ]
    //    ]);
        DB::table('strukturs')->insert([
            'name' => 'Aning Rochani',
               'jabatan' => 'Kepala Panti'
        ]);
    }
}
