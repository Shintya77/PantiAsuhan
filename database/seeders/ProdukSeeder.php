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
                'gambar'=>'assets/img/lemper.jpeg',
                'nama'=>'Lemper',  
                
            ],
            [
                'gambar'=>'assets/img/produk/cake-keju.jpeg',
                'nama'=>'Cake Keju',  
            ],
            [
                'gambar'=>'assets/img/produk/cake-coklat.jpeg',
                'nama'=>'Cake Cokelat',  
            ],
            [
                'gambar'=>'assets/img/produk/pudding.jpeg',
                'nama'=>'Pudding',  
            ],
            [
                'gambar'=>'assets/img/produk/brownis.jpeg',
                'nama'=>'Brownis',  
            ],
            [
                'gambar'=>'assets/img/produk/onde-onde.jpeg',
                'nama'=>'Onde-onde',  
            ],
            [
                'gambar'=>'assets/img/produk/onggol-onggol.jpeg',
                'nama'=>'Onggol-onggol',  
            ],
            [
                'gambar'=>'assets/img/produk/talam-pandan.jpeg',
                'nama'=>'Talam Pandan',  
            ],
            [
                'gambar'=>'assets/img/produk/pastel.jpeg',
                'nama'=>'Pastel Ayam',  
            ],


            ));
            
    }
}
