<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'title' => 'mechanic',
            'description' => 'lorem ipsum dolor sit amet',
            'main_pic' => 'pic1.png',
            'category_id' => 1,
        ]);
        Post::create([
            'title' => 'bitcoin',
            'description' => 'lorem ipsum dolor sit amet2',
            'main_pic' => 'pic1.png',
            'category_id' => 2,
        ]);

    }
}
