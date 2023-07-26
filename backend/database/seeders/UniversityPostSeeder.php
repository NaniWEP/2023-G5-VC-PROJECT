<?php

namespace Database\Seeders;

use App\Models\UniversityPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversityPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $posts =
        [
            ['title' => 'Wep Programming Opportunity generation 2025', 'description' => 'Hello world', 'date' => '2023-09-01', 'variable_student' => 50, 'status' => 1, 'major_id' => 1, 'user_id' => 1],
            ['title' => 'Systems Network Administrator generation 2025', 'description' => 'Hello world', 'date' => '2023-09-01', 'variable_student' => 25, 'status' => 1, 'major_id' => 2, 'user_id' => 1],
        ];

        foreach($posts as $post)
        {
            UniversityPost::create($post);
        }
    }
}
