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
            'firstname' => 'ali',
            'lastname' => 'azizi',
            'age' => '24',
            'email' => 'test@example.com',
            'mobile' => '09184655696',
            'role' => '2',
            'password' => Hash::make('123'),
        ]);
        User::create([
            'firstname' => 'sara',
            'lastname' => 'zandi',
            'age' => '30',
            'email' => 'aaa@example.com',
            'mobile' => '09184620696',
            'role' => '1',
            'password' => Hash::make('123'),
        ]);

    }
}
