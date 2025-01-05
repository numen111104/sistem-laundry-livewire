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
                'name' => 'Santri 1',
                'email' => 'santri1@example.com',
                'gender' => 'Male',
                'phone' => '+6282345678901',
                'photo' => null, // Foto default jika diperlukan
                'role_id' => rand(2, 3), // ROLE_USER atau ROLE_WALSAN
                'is_santri' => rand(0, 1), // Santri atau bukan santri
                'email_verified_at' => now(),
                'password' => Hash::make('1234'), // Ganti dengan password yang aman
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Santri 2',
                'email' => 'santri2@example.com',
                'gender' => 'Female',
                'phone' => '+6282345678902',
                'photo' => null, // Foto default jika diperlukan
                'role_id' => rand(2, 3), // ROLE_USER atau ROLE_WALSAN
                'is_santri' => rand(0, 1), // Santri atau bukan santri
                'email_verified_at' => now(),
                'password' => Hash::make('1234'), // Ganti dengan password yang aman
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Santri 3',
                'email' => 'santri3@example.com',
                'gender' => 'Male',
                'phone' => '+6282345678903',
                'photo' => null, // Foto default jika diperlukan
                'role_id' => rand(2, 3), // ROLE_USER atau ROLE_WALSAN
                'is_santri' => rand(0, 1), // Santri atau bukan santri
                'email_verified_at' => now(),
                'password' => Hash::make('1234'), // Ganti dengan password yang aman
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Santri 4',
                'email' => 'santri4@example.com',
                'gender' => 'Female',
                'phone' => '+6282345678904',
                'photo' => null, // Foto default jika diperlukan
                'role_id' => rand(2, 3), // ROLE_USER atau ROLE_WALSAN
                'is_santri' => rand(0, 1), // Santri atau bukan santri
                'email_verified_at' => now(),
                'password' => Hash::make('1234'), // Ganti dengan password yang aman
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Santri 5',
                'email' => 'santri5@example.com',
                'gender' => 'Male',
                'phone' => '+6282345678905',
                'photo' => null, // Foto default jika diperlukan
                'role_id' => rand(2, 3), // ROLE_USER atau ROLE_WALSAN
                'is_santri' => rand(0, 1), // Santri atau bukan santri
                'email_verified_at' => now(),
                'password' => Hash::make('1234'), // Ganti dengan password yang aman
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Santri 6',
                'email' => 'santri6@example.com',
                'gender' => 'Female',
                'phone' => '+6282345678906',
                'photo' => null, // Foto default jika diperlukan
                'role_id' => rand(2, 3), // ROLE_USER atau ROLE_WALSAN
                'is_santri' => rand(0, 1), // Santri atau bukan santri
                'email_verified_at' => now(),
                'password' => Hash::make('1234'), // Ganti dengan password yang aman
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Santri 7',
                'email' => 'santri7@example.com',
                'gender' => 'Male',
                'phone' => '+6282345678907',
                'photo' => null, // Foto default jika diperlukan
                'role_id' => rand(2, 3), // ROLE_USER atau ROLE_WALSAN
                'is_santri' => rand(0, 1), // Santri atau bukan santri
                'email_verified_at' => now(),
                'password' => Hash::make('1234'), // Ganti dengan password yang aman
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];

        User::insert($users);
    }
}
