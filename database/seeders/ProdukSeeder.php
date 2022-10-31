<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produk')->insert(array(
            [
                
                'gambar'=>'assets/img/cake-coklat.jpeg',
                'nama'=>'Cake Coklat',
                'harga_normal'=>2900,
                'harga_tanggung'=>2500,
                'harga_mini'=>1700   
                
            ],
            [
                'gambar'=>'assets/img/cake-keju.jpeg',
                'nama'=>'Cake Keju',
                'harga_normal'=>2900,
                'harga_tanggung'=>2500,
                'harga_mini'=>1700  
                
            ]
            ));
            
    }
}
