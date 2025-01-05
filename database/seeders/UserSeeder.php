<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                // 'id' => 1,
                'name' => 'Admin Super',
                'email' => 'admin@example.com',
                'gender' => 'Male',
                'phone' => '+6281234567890',
                'photo' => null, // Foto default jika diperlukan
                'role_id' => 1, // ROLE_ADMIN
                'is_santri' => 0, // Admin bukan santri
                'email_verified_at' => now(),
                'password' => Hash::make('1234'), // Ganti dengan password yang aman
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // 'id' => 2,
                'name' => 'User Biasa',
                'email' => 'user@example.com',
                'gender' => 'Female',
                'phone' => '+6289876543210',
                'photo' => null, // Foto default jika diperlukan
                'role_id' => 2, // ROLE_USER
                'is_santri' => 0, // User adalah santri
                'email_verified_at' => now(),
                'password' => Hash::make('1234'), // Ganti dengan password yang aman
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                // 'id' => 3,
                'name' => 'Wali Santri',
                'email' => 'walsan@example.com',
                'gender' => 'Male',
                'phone' => '+6282345678901',
                'photo' => null, // Foto default jika diperlukan
                'role_id' => 3, // ROLE_WALSAN
                'is_santri' => 1, // Wali santri bukan santri
                'email_verified_at' => now(),
                'password' => Hash::make('1234'), // Ganti dengan password yang aman
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        User::insert($users);
    }
}
