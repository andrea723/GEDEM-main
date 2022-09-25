<?php

namespace Database\Seeders;

use App\Models\Banks;
use Illuminate\Database\Seeder;

class BanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banks = [
            [
                'name' => '100%BANCO',
                'code' => '0156',
            ],
            [
                'name' => 'ABN AMRO BANK',
                'code' => '0196',
            ],
            [
                'name' => 'BANCAMIGA BANCO MICROFINANCIERO, C.A',
                'code' => '0172',
            ],
            [
                'name' => 'BANCO ACTIVO BANCO COMERCIAL, C.A.',
                'code' => '0171',
            ],
            [
                'name' => 'BANCO AGRICOLA',
                'code' => '0166',
            ],
            [
                'name' => 'BANCO BICENTENARIO',
                'code' => '0175',
            ],
            [
                'name' => 'BANCO CARONI, C.A. BANCO UNIVERSAL',
                'code' => '0128',
            ],
            [
                'name' => 'BANCO DE DESARROLLO DEL MICROEMPRESARIO',
                'code' => '0164',
            ],
            [
                'name' => 'BANCO DE VENEZUELA S.A.C.A. BANCO UNIVERSAL',
                'code' => '0102',
            ],
            [
                'name' => 'BANCARIBE C.A. BANCO UNIVERSAL',
                'code' => '0114',
            ],
            [
                'name' => 'BANCO DEL PUEBLO SOBERANO C.A.',
                'code' => '0149',
            ],
            [
                'name' => 'BANCO DEL TESORO',
                'code' => '0163',
            ],
            [
                'name' => 'BANCO ESPIRITO SANTO, S.A.',
                'code' => '0176',
            ],
            [
                'name' => 'BANCO EXTERIOR C.A.',
                'code' => '0115',
            ],
            [
                'name' => 'BANCO INDUSTRIAL DE VENEZUELA',
                'code' => '0003',
            ],
            [
                'name' => 'BANCO INTERNACIONAL DE DESARROLLO, C.A.',
                'code' => '0173',
            ],
            [
                'name' => 'BANCO MERCANTIL C.A.',
                'code' => '0105',
            ],
            [
                'name' => 'BANCO NACIONAL DE CREDITO',
                'code' => '0191',
            ],
            [
                'name' => 'BANCO OCCIDENTAL DE DESCUENTO',
                'code' => '0116',
            ],
            [
                'name' => 'BANCO PLAZA',
                'code' => '0138',
            ],
            [
                'name' => 'BANCO PROVINCIAL BBVA',
                'code' => '0108',
            ],
            [
                'name' => 'BANCO VENEZOLANO DE CREDITO S.A.',
                'code' => '0104',
            ],
            [
                'name' => 'BANCRECER S.A. BANCO DE DESARROLLO',
                'code' => '0168',
            ],
            [
                'name' => 'BANESCO BANCO UNIVERSAL',
                'code' => '0134',
            ],
            [
                'name' => 'BANFANB',
                'code' => '0177',
            ],
            [
                'name' => 'BANGENTE',
                'code' => '0146',
            ],
            [
                'name' => 'BANPLUS BANCO COMERCIAL C.A',
                'code' => '0174',
            ],
            [
                'name' => 'CITIBANK',
                'code' => '0190',
            ],
            [
                'name' => 'CORP BANCA',
                'code' => '0121',
            ],
            [
                'name' => 'DELSUR BANCO UNIVERSAL',
                'code' => '0157',
            ],
            [
                'name' => 'BFC BANCO FONDO COMÚN C.A. BANCO UNIVERSAL',
                'code' => '0151',
            ],
            [
                'name' => 'INSTITUTO MUNICIPAL DE CRÉDITO POPULAR',
                'code' => '0601',
            ],
            [
                'name' => 'MIBANCO BANCO DE DESARROLLO, C.A.',
                'code' => '0169',
            ],
            [
                'name' => 'SOFITASA',
                'code' => '0137',
            ],
        ];

        foreach( $banks AS $array )
            Banks::create( $array );
    }
}
