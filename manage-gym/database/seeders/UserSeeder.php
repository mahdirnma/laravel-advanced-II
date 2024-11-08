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
            'name' => 'ali',
            'email' => 'ali@example.com',
            'password' => Hash::make(123),
        ]);
        User::create([
            'name' => 'mahdi',
            'email' => 'mahdi@example.com',
            'password' => Hash::make(123),
        ]);

    }
}
