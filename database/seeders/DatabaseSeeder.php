<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'username' => 'Admin',
            'email' => 'admin@example.com', // Ganti dengan email yang unik
            'role' => '1',
            'status' => 1,
            'password' => bcrypt('password'),
            'hp' => '081234567890',
        ]);
    
        User::create([
            'username' => 'Ilyasa',
            'email' => 'ilyasa@example.com', // Ganti dengan email yang unik
            'role' => '0',
            'status' => 1,
            'password' => bcrypt('password'),
            'hp' => '081234569000',
        ]);
    }
}
