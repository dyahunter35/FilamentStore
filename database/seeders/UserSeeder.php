<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Create admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'phone' => '+1234567890',
            'password' => Hash::make('password'),
            'status' => 'active',
            'email_verified_at' => now(),
        ]);

        // Create regular users
        User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'phone' => '+1234567891',
            'password' => Hash::make('password'),
            'status' => 'active',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '+1234567892',
            'password' => Hash::make('password'),
            'status' => 'active',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Mike Johnson',
            'email' => 'mike@example.com',
            'phone' => '+1234567893',
            'password' => Hash::make('password'),
            'status' => 'inactive',
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Sarah Wilson',
            'email' => 'sarah@example.com',
            'phone' => '+1234567894',
            'password' => Hash::make('password'),
            'status' => 'suspended',
            'email_verified_at' => now(),
        ]);
    }
}
