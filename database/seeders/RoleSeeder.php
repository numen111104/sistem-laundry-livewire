<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'id' => 1,
                'name' => 'Admin',
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'id' => 2,
                'name' => 'User',
                'created_at' => now(),
                'updated_at' => null,
            ],
            [
                'id' => 3,
                'name' => 'Walsan',
                'created_at' => now(),
                'updated_at' => null,
            ],
        ];
        Role::insert($roles);
    }
}
