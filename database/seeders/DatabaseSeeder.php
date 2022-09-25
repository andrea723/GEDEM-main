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
        /* Seeder */
            $this->call([CategoriasSeeder::class]);
            $this->call([BanksSeeder::class]);
        
        /* Seeder Developers */
            // $this->call([UserSeeder::class]);
    }
}
