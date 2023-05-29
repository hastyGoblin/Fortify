<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $niveles = [ //Asignamos en una variable parametros que ocuparemos
            'Primero',
            'Segundo',
            'Tercero',
            'Cuarto',
            'Quinto',
            'Sexto'
        ];

        foreach ($niveles as $nivel) { // Recorremos el campo nombre con las diferentes opciones que contiene la variable $nivel e insertamos en la tabla niveles
            DB::table('niveles')->insert([
                'nombre' => $nivel
            ]);
        }
    }
}
