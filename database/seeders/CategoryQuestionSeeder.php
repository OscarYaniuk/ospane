<?php

namespace Database\Seeders;

use App\Models\CategoryQuestion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CategoryQuestion::create([
            'name' => 'Exámenes',
            'description' => 'La presencia de mujeres y hombres de forma que, en el conjunto a que se refiera, las personas de cada sexo no superen el 51%.'
        ]);




    }
}
