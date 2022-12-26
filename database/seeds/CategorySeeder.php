<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(['name' => 'ARMARIO GUARDASACABOCADOS',    'image' => 'images/category/producto3_js.png']);
        Category::create(['name' => 'BANQUILLA DE ARMADO',          'image' => 'images/category/producto9_js.png']);
        Category::create(['name' => 'CARRO DE EMPAQUE',             'image' => 'images/category/producto6_jsgr.png']);
        Category::create(['name' => 'CARRO POSACORTE',              'image' => 'images/category/Grupo_1423.png']);
        Category::create(['name' => 'CARRO PARA DEFORMADO',         'image' => 'images/category/producto5_jsgr.png']);
        Category::create(['name' => 'HORMEROS',                     'image' => 'images/category/Grupo_1427.png']);
        Category::create(['name' => 'ANODOS DE MAGNESIO PARA TERMOTANQUE', 'image' => 'images/category/Grupo_3249.png']);
    }
}
