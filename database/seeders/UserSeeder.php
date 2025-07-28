<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@mail.com',
            'password' => hash::make('admin'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'User 1',
            'username' => 'user1',
            'email' => 'user@mail.com',
            'password' => hash::make('user'),
            'role' => 'user',
        ]);
    }
}
