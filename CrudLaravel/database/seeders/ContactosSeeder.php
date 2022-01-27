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
            'nombre'=>'Bananin',
            'apellidos'=>'DT',
            'telefono'=>918097765,
            'tipo'=>'Movil',
            'birthday'=>'2001/01/19',
            'relationship'=>'familia',
            'description'=>'',
            'favorites'=>true
        ]);
        DB::table('contactos')->insert([
            'nombre'=>'Andrew',
            'apellidos'=>'Jackson',
            'telefono'=>445069131,
            'tipo'=>'Fijo',
            'birthday'=>'2011/04/01',
            'relationship'=>'amigos',
            'description'=>'Amigo conocido de Youtube',
            'favorites'=>false
        ]);
    }
}
