<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class HargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('harga')->insert(array(
           
         
            [
                'produk_id'=>1,
                'harga_normal'=>3000,
                'harga_tanggung'=>2500,
                'harga_mini'=>1850
            ],
            [
                'produk_id'=>2,
                'harga_normal'=>2900,
                'harga_tanggung'=>2500,
                'harga_mini'=>1700
            ],
            [
                'produk_id'=>3,
                'harga_normal'=>2850,
                'harga_tanggung'=>2500,
                'harga_mini'=>1700
            ],
            [
                'produk_id'=>4,
                'harga_normal'=>2900,
                'harga_tanggung'=>2500,
                'harga_mini'=>1700
            ],
            [
                'produk_id'=>5,
                'harga_normal'=>2900,
                'harga_tanggung'=>2500,
                'harga_mini'=>1700
            ],
            [
                'produk_id'=>6,
                'harga_normal'=>3000,
                'harga_tanggung'=>2500,
                'harga_mini'=>1950
            ],
            [
                'produk_id'=>7,
                'harga_normal'=>2850,
                'harga_tanggung'=>2500,
                'harga_mini'=>1700
            ],
            [
                'produk_id'=>8,
                'harga_normal'=>2900,
                'harga_tanggung'=>2500,
                'harga_mini'=>1800
            ],
            [
                'produk_id'=>9,
                'harga_normal'=>4500,
                'harga_tanggung'=>2750,
                'harga_mini'=>2100
            ],
            [
                'produk_id'=>10,
                'harga_normal'=>3500,
                'harga_tanggung'=>2500,
                'harga_mini'=>1800
            ],
            // [
            //     'produk_id'=>11,
            //     'harga_normal'=>2800,
            //     'harga_tanggung'=>2500,
            //     'harga_mini'=>1700
            // ],
            [
                'produk_id'=>11,
                'harga_normal'=>3700,
                'harga_tanggung'=>2750,
                'harga_mini'=>2100
            ],
            [
                'produk_id'=>12,
                'harga_normal'=>2900,
                'harga_tanggung'=>2500,
                'harga_mini'=>1800
            ],




            ));   
    }
}
