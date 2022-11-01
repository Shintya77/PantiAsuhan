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

<<<<<<< HEAD
        $this->call([
            // ProdukSeeder::class,
            HargaSeeder::class,
=======
        $this -> call([
            StrukturSeeder::class,
>>>>>>> 13915a72f8db11866cc994c3212ad630b7cce561
        ]);
    }
}
