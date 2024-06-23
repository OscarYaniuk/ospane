<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Level;

// Definición de la clase seeder para la tabla 'levels'
class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear entradas en la tabla 'levels' con los nombres especificados

        // Crea un registro en la tabla 'levels' con el nombre 'Principiante'
        Level::create([
            'name' => 'Principiante',
        ]);

        // Crea un registro en la tabla 'levels' con el nombre 'Intermedio'
        Level::create([
            'name' => 'Intermedio',
        ]);

        // Crea un registro en la tabla 'levels' con el nombre 'Avanzado'
        Level::create([
            'name' => 'Avanzado',
        ]);

        // Crea un registro en la tabla 'levels' con el nombre 'Experto'
        Level::create([
            'name' => 'Experto',
        ]);
    }
}
