<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(array(
            [
                
                
                'name'=>'shintya',
                'email'=>'shintya@gmail.com',
                'password' => Hash::make('donatur'),
                'alamat'=>'malang',
                'nohp'=>'081212345678',
                'role'=>'donatur'   
                
            ],
            [
                
                
                'name'=>'anisa',
                'email'=>'anisa@gmail.com',
                'password' => Hash::make('pemesan'),
                'alamat'=>'malang',
                'nohp'=>'081330551209',
                'role'=>'pemesan'   
                
            ],
            [
                
                
                'name'=>'ifa',
                'email'=>'ifa@gmail.com',
                'password' => Hash::make('admin'),
                'alamat'=>'malang',
                'nohp'=>'081298765432',
                'role'=>'admin'   
                
            ],
            [
                
                
                'name'=>'irma',
                'email'=>'irma@gmail.com',
                'password' => Hash::make('donatur'),
                'alamat'=>'pasuruan',
                'nohp'=>'085604833794',
                'role'=>'donatur'   
                
            ],

            [
                
                'name'=>'admin1',
                'email'=>'paputri1@gmail.com',
                'password' => Hash::make('admin'),
                'alamat'=>'malang',
                'nohp'=>'081233967234',
                'role'=>'admin'   
                
            ],

            [
                
                'name'=>'admin2',
                'email'=>'paputri2@gmail.com',
                'password' => Hash::make('donatur'),
                'alamat'=>'malang',
                'nohp'=>'081233967234',
                'role'=>'donatur'   
                
            ],

            [
                
                'name'=>'admin3',
                'email'=>'paputri3@gmail.com',
                'password' => Hash::make('pemesan'),
                'alamat'=>'malang',
                'nohp'=>'081233967234',
                'role'=>'pemesan'   
                
            ]
            ));
    }
}
