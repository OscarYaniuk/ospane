<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Price;

// Definición de la clase seeder para la tabla 'prices'
class PriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear entradas en la tabla 'prices' con los valores especificados

        // Crea un registro en la tabla 'prices' con el nombre 'Gratis' y valor 0
        Price::create([
            'name' => 'Gratis',
            'value' => 0,
        ]);

        // Crea un registro en la tabla 'prices' con el nombre '19.99 € (Nivel 1)' y valor 19.99
        Price::create([
            'name' => '19.99 € (Nivel 1)',
            'value' => 19.99
        ]);

        // Crea un registro en la tabla 'prices' con el nombre '29.99 € (Nivel 2)' y valor 29.99
        Price::create([
            'name' => '29.99 € (Nivel 2)',
            'value' => 29.99
        ]);

        // Crea un registro en la tabla 'prices' con el nombre '39.99 € (Nivel 3)' y valor 39.99
        Price::create([
            'name' => '39.99 € (Nivel 3)',
            'value' => 39.99
        ]);
    }
}
