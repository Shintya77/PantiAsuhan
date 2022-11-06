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
        DB::table('banks')->insert(array(
            [
                'nama_bank'=>'BRI',
                'nama_rekening' => 'Panti Asuhan',
                'norekening'=>123456789,
                'gambar'=>'assets/img/bri'
            ]
         
            ));  
    }
}
