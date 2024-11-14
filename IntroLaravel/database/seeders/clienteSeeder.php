<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class clienteSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cliente')->insert([
            [
                'nombre'=>'Kat',
                'apellido'=>'Villanueva',
                'correo'=>'KathVillanew@gmail.com',
                'telefono'=>'4426804114'
            ],
            [
                'nombre'=>'Emiliano',
                'apellido'=>'Cortes',
                'correo'=>'emily@gmail.com',
                'telefono'=>'4426342312'
            ],
            [
                'nombre'=>'Diego',
                'apellido'=>'Valdelamar',
                'correo'=>'noviodeEmily@gmail.com',
                'telefono'=>'4495622344'
            ]]);
    }
}
