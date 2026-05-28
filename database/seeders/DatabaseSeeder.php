<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run()
{
    // Usuario Administrador para probar el ABM
    User::create([
        'name' => 'Administrador Sistema',
        'email' => 'admin@mail.com',
        'username' => 'admin',
        'password' => Hash::make('Admin123*'),
        'role' => 'admin',
    ]);

    // Usuario requerido por la guía
    User::create([
        'name' => 'Omar Quispe M.', // Puedes ajustar el nombre completo real
        'email' => 'omar@mail.com',
        'username' => 'omarqm',
        'password' => Hash::make('Omar411*'),
        'role' => 'user',
    ]);
    User::factory()->count(4)->create([
            'role' => 'user'
        ]);
}
}
