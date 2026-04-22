<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@portal.com',
            'password' => Hash::make('password123'),
            'role'     => 'admin',
            'is_active'=> true,
        ]);

        // Jurnalis
        User::create([
            'name'     => 'Jurnalis',
            'email'    => 'jurnalis@portal.com',
            'password' => Hash::make('password123'),
            'role'     => 'journalist',
            'is_active'=> true,
        ]);

        // User biasa
        User::create([
            'name'     => 'User',
            'email'    => 'user@portal.com',
            'password' => Hash::make('password123'),
            'role'     => 'user',
            'is_active'=> true,
        ]);
    }
}