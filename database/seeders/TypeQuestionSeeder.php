<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeQuestion;

class TypeQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeQuestion::create([
            'name' => 'Ayuntamiento de Santa Cruz',
            'description' => 'Estabilización, con lista de reserva, preguntas resueltas.',
        ]);

        TypeQuestion::create([
            'name' => 'Gobierno de Canarias',
            'description' => 'Turno Libre.',
        ]);

        TypeQuestion::create([
            'name' => 'Universidad de La Laguna',
            'description' => 'Turno Libre.',
        ]);

    }
}
