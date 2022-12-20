<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert(array(
            [  
                'name'=>'shintya',
                'email'=>'shintya@gmail.com',
                'password' => Hash::make('donatur'),
                'alamat'=>'malang',
                'nohp'=>'081212345678',
                'role'=>'user'       
            ],
            [ 
                'name'=>'anisa',
                'email'=>'anisa@gmail.com',
                'password' => Hash::make('pemesan'),
                'alamat'=>'malang',
                'nohp'=>'081330551209',
                'role'=>'user'      
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
                'role'=>'user'     
            ],
            [   
                'name'=>'admin',
                'email'=>'paputri1@gmail.com',
                'password' => Hash::make('admin'),
                'alamat'=>'malang',
                'nohp'=>'081233967234',
                'role'=>'admin'    
            ],
            [   
                'name'=>'donatur',
                'email'=>'paputri2@gmail.com',
                'password' => Hash::make('donatur'),
                'alamat'=>'malang',
                'nohp'=>'081233967234',
                'role'=>'user'   
            ],

            [
                
                'name'=>'pemesan kue',
                'email'=>'paputri3@gmail.com',
                'password' => Hash::make('pemesan'),
                'alamat'=>'malang',
                'nohp'=>'081233967234',
                'role'=>'user'   
                
            ]
            ));
    }
}
