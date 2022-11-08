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
                'nama_bank'=>'BSI',
                'nama_rekening' => 'Panti Asuhan Putri Aisyiyah',
                'norekening'=> 7004777098,
                'gambar'=>'assets/img/bsi.png'
            ],
            [
                'nama_bank'=>'BRI',
                'nama_rekening' => 'Panti Asuhan Putri Aisyiyah',
                'norekening'=>'3127-01-001515-53-6',
                'gambar'=>'assets/img/bri.png'
            ],
            [
                'nama_bank'=>'BTN',
                'nama_rekening' => 'Panti Asuhan Putri Aisyiyah',
                'norekening'=> '0012-01-50-063175-6',
                'gambar'=>'assets/img/btn.jpg'
            ]
         
            ));  
    }
}
