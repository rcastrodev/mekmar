<?php

use App\Data;
use App\Company;
use Illuminate\Database\Seeder;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Data::create([
            'company_id'    => Company::first()->id,
            'address'       => 'Coronel Pringles 3450 (1752) Lomas del Mirador, Provincia de Buenos Aires',
            'email'         => 'consultas@mekmar.com.ar',
            'phone1'        => '+541144413928|+54 (11) 4441-3928',
            'phone2'        => '+541144413928|+54 (11) 4441-3928',
            'phone3'        => '+541144413928|+54 (11) 4441-3928',
            'phone4'        => '+541144413928|+54 (11) 4441-3928',
            'logo_header'   => 'images/data/logo_header.svg',
            'logo_footer'   => 'images/data/logo_header.svg'
        ]);
         
    }
}
