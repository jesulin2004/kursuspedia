<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'jeje',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin111'),
            'role' => 'admin',
        ]);
    }
}
