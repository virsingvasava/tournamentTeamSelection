<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Admin',
            'first_name' => 'Super',
            'last_name' => 'Admin',
            'username' => 'Admin@123',
            'email' => 'admin@gmail.com',
            'phone_number' => null,
            'profile_picture' => null,
            'status' => 'active',
            'password' => Hash::make('Admin@123'),
        ]);
    }
}
