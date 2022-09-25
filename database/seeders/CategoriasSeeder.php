<?php

namespace Database\Seeders;

use App\Models\Categorias;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            [
                'name' => 'Juvenil',
                'year_in' => 16,
                'year_out' => 19,
            ],
            [
                'name' => 'Libre',
                'year_in' => 20,
                'year_out' => 29,
            ],
            [
                'name' => 'Sub Master A',
                'year_in' => 30,
                'year_out' => 34,
            ],
            [
                'name' => 'Sub Master B',
                'year_in' => 35,
                'year_out' => 39,
            ],
            [
                'name' => 'Master',
                'year_in' => 40,
                'year_out' => 44,
            ],
            [
                'name' => 'Master B',
                'year_in' => 45,
                'year_out' => 49,
            ],
            [
                'name' => 'Master C',
                'year_in' => 50,
                'year_out' => 54,
            ],
            [
                'name' => 'Master D',
                'year_in' => 55,
                'year_out' => 59,
            ],
            [
                'name' => 'Master E',
                'year_in' => 60,
                'year_out' => 64,
            ],
            [
                'name' => 'Master F',
                'year_in' => 65,
                'year_out' => 69,
            ],
            [
                'name' => 'Master G',
                'year_in' => 70,
                'year_out' => 99,
            ],
            [
                'name' => 'Movilidad Reducida Con Silla de Ruedas',
                'year_in' => 16,
                'year_out' => 99,
            ],
            [
                'name' => 'Movilidad Reducida Sin Silla de Ruedas',
                'year_in' => 16,
                'year_out' => 99,
            ],
        ];

        foreach( $categorias AS $array )
            Categorias::create( $array );
    }
}
