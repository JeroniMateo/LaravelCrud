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
            'email'=>'jmateo@cifpfbmoll.eu',
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
            'email'=>'randion@cifpfbmoll.eu',
            'tipo'=>'Fijo',
            'birthday'=>'1971/04/01',
            'relationship'=>'otros',
            'description'=>'Contacto Profesor 2o DAW Entorno Servidor',
            'favorites'=>false
        ]); 
        DB::table('contactos')->insert([
            'nombre'=>'Pedro',
            'apellidos'=>'Lopez',
            'telefono'=>567178242,
            'email'=>'pedrolopez@gmail.com',
            'tipo'=>'Movil',
            'birthday'=>'1991/10/11',
            'relationship'=>'amigos',
            'description'=>'Amigos de la infancia',
            'favorites'=>true
        ]);
    }
}
