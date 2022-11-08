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
                
                
                'name'=>'Ifa',
                'email'=>'ifa@gmail.com',
                'password' => Hash::make('admin'),
                'alamat'=>'malang',
                'nohp'=>'081278903456',
                'role'=>'admin'   
                
            ]
            ));
    }
}
