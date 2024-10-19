<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::create([
            'title' => 'mechanic',
            'description' => 'lorem ipsum dolor sit amet',
            'main_pic' => 'pic1.png',
            'category_id' => 1,
        ]);
        Blog::create([
            'title' => 'bitcoin',
            'description' => 'lorem ipsum dolor sit amet2',
            'main_pic' => 'pic1.png',
            'category_id' => 2,
        ]);

    }
}
