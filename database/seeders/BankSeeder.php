<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bank')->insert(array(
           
         
            [
                'gambar'=>'assets/img/bri',
                'nama_bank'=>'BRI',
                'norekening'=>123456789,
            ]
         
            ));  
    }
}
