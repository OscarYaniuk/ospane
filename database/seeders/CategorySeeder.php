<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

// Definición de la clase seeder para la tabla 'categories'
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear entradas en la tabla 'categories' con los nombres especificados

        // Crea un registro en la tabla 'categories' con el nombre 'Legal'
        Category::create([
            'name' => 'Legal',
        ]);

        // Crea un registro en la tabla 'categories' con el nombre 'Practico'
        Category::create([
            'name' => 'Practico',
        ]);

        // Crea un registro en la tabla 'categories' con el nombre 'Ofimática'
        Category::create([
            'name' => 'Ofimática',
        ]);
    }
}
