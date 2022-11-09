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
                'gambar'=>'assets/img/produk/lemper.jpeg',
                'nama'=>'Lemper',  
                
            ],
            [
                'gambar'=>'assets/img/produk/cake-keju.jpeg',
                'nama'=>'Cake Keju',  
            ],
            [
                'gambar'=>'assets/img/produk/brownis.jpeg',
                'nama'=>'Brownis',  
            ],
            [
                'gambar'=>'assets/img/produk/pudding.jpeg',
                'nama'=>'Pudding',  
            ],
            [
                'gambar'=>'assets/img/produk/kue-mangkok.jpeg',
                'nama'=>'Kue Mangkok',  
            ],
            [
                'gambar'=>'assets/img/produk/onde-onde.jpeg',
                'nama'=>'Onde-onde',  
            ],
            [
                'gambar'=>'assets/img/produk/onggol2.jpeg',
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
            [
                'gambar'=>'assets/img/produk/long-shoes-fla.jpeg',
                'nama'=>'Long Shoes Fla',  
            ],
            // [
            //     'gambar'=>'assets/img/produk/roti-kukus.jpeg',
            //     'nama'=>'Roti Kukus',  
            // ],
            [
                'gambar'=>'assets/img/produk/risol-mayo.jpeg',
                'nama'=>'Risol Mayo',  
            ],
            [
                'gambar'=>'assets/img/produk/pisang-gulung-coklat.jpeg',
                'nama'=>'Pisang Gulung Coklat',  
            ],




            ));
            
    }
}
