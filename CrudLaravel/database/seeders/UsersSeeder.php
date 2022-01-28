<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Jeroni',
            'apellidos'=>'Mateo',
            'role'=>'admin',
            'email'=>'jmateo@cifpfbmoll.eu',
            'age'=>21,
            'email_verified_at' => now(),
            'password' => Hash::make('secretos'),
            'remember_token' => Str::random(10),
        ]); 
          DB::table('users')->insert([
            'name'=>'Rafael',
            'apellidos'=>'Andion',
            'role'=>'user',
            'email'=>'randion@cifpfbmoll.eu',
            'age'=>61,
            'email_verified_at' => now(),
            'password' => Hash::make('secretos'),
            'remember_token' => Str::random(10),
        ]);
    }
}
