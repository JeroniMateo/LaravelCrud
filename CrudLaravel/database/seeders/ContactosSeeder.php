<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contactos')->insert([
            'nombre'=>'Jeroni',
            'apellidos'=>'Mateo',
            'telefono'=>918097765,
            'tipo'=>'Movil',
            'birthday'=>'2001/01/19',
            'relationship'=>'familia',
            'description'=>'',
            'favorites'=>true
        ]);
        DB::table('contactos')->insert([
            'nombre'=>'Rafael',
            'apellidos'=>'Andion',
            'telefono'=>445069131,
            'tipo'=>'Fijo',
            'birthday'=>'1971/04/01',
            'relationship'=>'otros',
            'description'=>'Contacto Profesor 2o DAW Entorno Servidor',
            'favorites'=>false
        ]);
    }
}
