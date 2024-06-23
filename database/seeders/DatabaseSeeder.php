<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call([
            LevelSeeder::class,
            CategorySeeder::class,
            PriceSeeder::class,
            TypeSeeder::class,
            UserSeeder::class,
            TypeQuestionSeeder::class,
            ScaleSeeder::class,
            CategoryQuestionSeeder::class,
            QuestionSeeder::class,



            // Otros seeders si los hay
        ]);
    }
}
