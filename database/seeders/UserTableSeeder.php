<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear un usuario de ejemplo
        User::create([
            'name' => 'Wil',
            'email' => 'ingeniaess@gmail.com',
            'password' => Hash::make('visualdemon'),
            'last_name' => 'Jurado',
            'cellphone' => '3206100639',
            'identification_number' => '87060332',
            'date_of_birth' => '1983-01-26',
            'institution_id' => 1, // ID de la institución INDEPENDIENTE
        ]);
    }
}

//Correr este seeder:  ----php artisan db:seed --class=UserTableSeeder
