<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Scale;


class ScaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Scale::create([
            'name' => 'A1',
        ]);

        Scale::create([
            'name' => 'A2',
        ]);

        Scale::create([
            'name' => 'B',
        ]);

        Scale::create([
            'name' => 'C1',
        ]);

        Scale::create([
            'name' => 'C2',
        ]);

        Scale::create([
            'name' => 'E',
        ]);


    }
}
