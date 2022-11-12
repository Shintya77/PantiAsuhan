<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        $this->call([
            // ProdukSeeder::class,
            StrukturSeeder::class,
            UserSeeder::class,
            ProdukSeeder::class,
            KegiatanSeeder::class,
            GaleriSeeder::class,
            ProgramSeeder::class,
            DonaturSeeder::class,
            BinaanSeeder::class,
            BankSeeder::class

        ]);
    }
}
