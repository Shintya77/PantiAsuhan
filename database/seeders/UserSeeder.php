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
                
                
                'name'=>'Anisa',
                'email'=>'anisa@gmail.com',
                'password' => Hash::make('password'),
                'alamat'=>'malang',
                'nohp'=>'0813305512009',
                'role'=>'pemesan'   
                
            ]
            ));
    }
}
