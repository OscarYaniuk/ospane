<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
          //Crear usuario de prueba
          $user = User::create([
            'name' => 'Oscar Yaniuk',
            'email' => 'oscaryaniuk@gmail.com',
            'password' => bcrypt('@Queteimporta1.-'),
            'email_verified_at' => now(),
        ]);


        $user = User::create([
            'name' => 'Oscar Yaniuk',
            'email' => 'ospane@gmail.com',
            'password' => bcrypt('@Queteimporta1.-'),
            'email_verified_at' => now(),
        ]);

    }
}
