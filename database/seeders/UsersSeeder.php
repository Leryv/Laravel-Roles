<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
            'password' => bcrypt('writer')
        ]);
        $user->assignRole('writer');

        $user = User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin')
        ]);
        $user->assignRole('admin');

        $user = User::factory()->create([
            'name' => 'Example Super-Admin User',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('superadmin')
        ]);
        $user->assignRole('Super-Admin');

    }
}