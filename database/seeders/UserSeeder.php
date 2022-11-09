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
                
            ]
            ));
    }
}
