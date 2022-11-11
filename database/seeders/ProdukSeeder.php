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
                'nama'=>'Lemper - Normal',
                'harga'=>3000,
                
            ],
            [
                'gambar'=>'assets/img/produk/lemper.jpeg',
                'nama'=>'Lemper - Tanggung',  
                'harga'=>2500,
                
            ],
            [
                'gambar'=>'assets/img/produk/lemper.jpeg',
                'nama'=>'Lemper - Mini',  
                'harga'=>1850,
                
            ],
            [
                'gambar'=>'assets/img/produk/cake-keju.jpeg',
                'nama'=>'Cake Keju - Normal',  
                'harga'=>2900,
            ],
            [
                'gambar'=>'assets/img/produk/cake-keju.jpeg',
                'nama'=>'Cake Keju - Tanggung', 
                'harga'=>2500, 
            ],
            [
                'gambar'=>'assets/img/produk/cake-keju.jpeg',
                'nama'=>'Cake Keju - Mini',  
                'harga'=>1700,
            ],
            [
                'gambar'=>'assets/img/produk/brownis.jpeg',
                'nama'=>'Brownis - Normal',  
                'harga'=>2850,
            ],
            [
                'gambar'=>'assets/img/produk/brownis.jpeg',
                'nama'=>'Brownis - Tanggung',  
                'harga'=>2500,
            ],
            [
                'gambar'=>'assets/img/produk/brownis.jpeg',
                'nama'=>'Brownis - Mini',  
                'harga'=>1700,
            ],
            [
                'gambar'=>'assets/img/produk/pudding.jpeg',
                'nama'=>'Pudding - Normal',  
                'harga'=>2900,
            ],
            [
                'gambar'=>'assets/img/produk/pudding.jpeg',
                'nama'=>'Pudding - Tanggung',  
                'harga'=>2500,
            ],
            [
                'gambar'=>'assets/img/produk/pudding.jpeg',
                'nama'=>'Pudding - Mini',  
                'harga'=>1700,
            ],
            [
                'gambar'=>'assets/img/produk/kue-mangkok.jpeg',
                'nama'=>'Kue Mangkok - Normal',  
                'harga'=>2900,
            ],
            [
                'gambar'=>'assets/img/produk/kue-mangkok.jpeg',
                'nama'=>'Kue Mangkok - Tanggung',  
                'harga'=>2500,
            ],
            [
                'gambar'=>'assets/img/produk/kue-mangkok.jpeg',
                'nama'=>'Kue Mangkok - Mini',  
                'harga'=>1700,
            ],
            [
                'gambar'=>'assets/img/produk/onde-onde.jpeg',
                'nama'=>'Onde-onde - Normal',  
                'harga'=>3000,
            ],
            [
                'gambar'=>'assets/img/produk/onde-onde.jpeg',
                'nama'=>'Onde-onde - Tanggung',  
                'harga'=>2500,
            ],
            [
                'gambar'=>'assets/img/produk/onde-onde.jpeg',
                'nama'=>'Onde-onde - Mini',  
                'harga'=>1950,
            ],
            [
                'gambar'=>'assets/img/produk/onggol2.jpeg',
                'nama'=>'Onggol-onggol - Normal', 
                'harga'=>2850, 
            ],
            [
                'gambar'=>'assets/img/produk/onggol2.jpeg',
                'nama'=>'Onggol-onggol - Tanggung',
                'harga'=>2500,  
            ],
            [
                'gambar'=>'assets/img/produk/onggol2.jpeg',
                'nama'=>'Onggol-onggol - Mini',  
                'harga'=>1700,
            ],
            [
                'gambar'=>'assets/img/produk/talam-pandan.jpeg',
                'nama'=>'Talam Pandan - Normal',
                'harga'=>2900,  
            ],
            [
                'gambar'=>'assets/img/produk/talam-pandan.jpeg',
                'nama'=>'Talam Pandan - Tanggung',  
                'harga'=>2500,
            ],
            [
                'gambar'=>'assets/img/produk/talam-pandan.jpeg',
                'nama'=>'Talam Pandan - Mini',  
                'harga'=>1800,
            ],
            [
                'gambar'=>'assets/img/produk/pastel.jpeg',
                'nama'=>'Pastel Ayam - Normal',  
                'harga'=>4500,
            ],
            [
                'gambar'=>'assets/img/produk/pastel.jpeg',
                'nama'=>'Pastel Ayam - Tanggung',  
                'harga'=>2750,
            ],
            [
                'gambar'=>'assets/img/produk/pastel.jpeg',
                'nama'=>'Pastel Ayam - Mini',  
                'harga'=>2100,
            ],
            [
                'gambar'=>'assets/img/produk/long-shoes-fla.jpeg',
                'nama'=>'Long Soes Fla - Normal',  
                'harga'=>3000,
            ],
            [
                'gambar'=>'assets/img/produk/long-shoes-fla.jpeg',
                'nama'=>'Long Shoes Fla - Tanggung',  
                'harga'=>2500,
            ],
            [
                'gambar'=>'assets/img/produk/long-shoes-fla.jpeg',
                'nama'=>'Long Shoes Fla - Mini',  
                'harga'=>1800,
            ],
            [
                'gambar'=>'assets/img/produk/risol-mayo.jpeg',
                'nama'=>'Risol Mayo - Normal',  
                'harga'=>3700,
            ],
            [
                'gambar'=>'assets/img/produk/risol-mayo.jpeg',
                'nama'=>'Risol Mayo - Tanggung',  
                'harga'=>2750,
            ],
            [
                'gambar'=>'assets/img/produk/risol-mayo.jpeg',
                'nama'=>'Risol Mayo - Mini',  
                'harga'=>2100,
            ],
            [
                'gambar'=>'assets/img/produk/pisang-gulung-coklat.jpeg',
                'nama'=>'Pisang Gulung Coklat - Normal',  
                'harga'=>2900,
            ],
            [
                'gambar'=>'assets/img/produk/pisang-gulung-coklat.jpeg',
                'nama'=>'Pisang Gulung Coklat - Tanggung',  
                'harga'=>2500,
            ],
            [
                'gambar'=>'assets/img/produk/pisang-gulung-coklat.jpeg',
                'nama'=>'Pisang Gulung Coklat - Mini',  
                'harga'=>1800,
            ],
            [
                'gambar'=>'assets/img/produk/pie-buah-mandarin.jpeg',
                'nama'=>'Pie Buah Mandarin - Normal',  
                'harga'=>3200,
            ],
            [
                'gambar'=>'assets/img/produk/pie-buah-mandarin.jpeg',
                'nama'=>'Pie Buah Mandarin - Tanggung',  
                'harga'=>2600,
            ],
            [
                'gambar'=>'assets/img/produk/pie-buah-mandarin.jpeg',
                'nama'=>'Pie Buah Mandarin - Mini',  
                'harga'=>1900,
            ],
            [
                'gambar'=>'assets/img/produk/spiku.jpeg',
                'nama'=>'Spiku - Normal',  
                'harga'=>3200,
            ],
            [
                'gambar'=>'assets/img/produk/spiku.jpeg',
                'nama'=>'Spiku - Tanggung',  
                'harga'=>2600,
            ],
            [
                'gambar'=>'assets/img/produk/spiku.jpeg',
                'nama'=>'Spiku - Mini',  
                'harga'=>1900,
            ],
            [
                'gambar'=>'assets/img/produk/shoes-ragout.jpeg',
                'nama'=>'Soes Ragout - Normal',  
                'harga'=>3100,
            ],
            [
                'gambar'=>'assets/img/produk/shoes-ragout.jpeg',
                'nama'=>'Soes Ragout - Tanggung',  
                'harga'=>2500,
            ],
            [
                'gambar'=>'assets/img/produk/shoes-ragout.jpeg',
                'nama'=>'Soes Ragout - Mini',  
                'harga'=>1850,
            ],
            [
                'gambar'=>'assets/img/produk/tahu-bihun.jpeg',
                'nama'=>'Tahu Bihun - Normal',  
                'harga'=>2800,
            ],
            [
                'gambar'=>'assets/img/produk/tahu-bihun.jpeg',
                'nama'=>'Tahu Bihun - Tanggung',  
                'harga'=>2500,
            ],
            [
                'gambar'=>'assets/img/produk/tahu-bihun.jpeg',
                'nama'=>'Tahu Bihun - Mini',  
                'harga'=>1700,
            ],




            ));
            
    }
}
