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
                ['title' => 'Wep Programming Opportunity', 'description' => 'Programming languages have been classified into several programming language generations.', 'date' => '2023-09-01', 'variable_student' => 50, 'status' => 1, 'major_id' => 1, 'user_id' => 3],
                ['title' => 'Systems Network Administrator', 'description' => 'The System Network Administrator role is responsible for designing and installing well-functioning computer networks and systems.', 'date' => '2023-09-01', 'variable_student' => 25, 'status' => 1, 'major_id' => 2, 'user_id' => 3],
                ['title' => 'Marketing', 'description' => 'Generational marketing is a strategy for understanding how a certain age group behaves as consumers.', 'date' => '2023-09-10', 'variable_student' => 30, 'status' => 1, 'major_id' => 3, 'user_id' => 3],
                ['title' => 'Banking and Finance', 'description' => 'Unlike previous generations, Gen Z is more eager to embrace industrial change.', 'date' => '2023-08-13', 'variable_student' => 40, 'status' => 1, 'major_id' => 4, 'user_id' => 3],
                ['title' => 'World History of Tourism', 'description' => 'The 19th century saw the creation of the first travel agencies.', 'date' => '2023-08-10', 'variable_student' => 28, 'status' => 1, 'major_id' => 5, 'user_id' => 3],
                ['title' => 'Electronics and Electricity', 'description' => 'Electricity generation is the process of generating electric power from sources of primary energy.', 'date' => '2023-08-30', 'variable_student' => 68, 'status' => 1, 'major_id' => 6, 'user_id' => 3],
                ['title' => 'Engineering and Architecture', 'description' => 'Technological innovation in architecture and engineering education an investigation on three generations from Turkey', 'date' => '2023-07-30', 'variable_student' => 58, 'status' => 1, 'major_id' => 7, 'user_id' => 3],
                ['title' => 'Accounting', 'description' => 'Generational accounting is a method of measuring the fiscal burdens facing current and future generations', 'date' => '2023-10-30', 'variable_student' => 70, 'status' => 1, 'major_id' => 8, 'user_id' => 4],
                ['title' => 'Administration', 'description' => 'the people in an organization who manage its business and operations.', 'date' => '2023-10-20', 'variable_student' => 70, 'status' => 1, 'major_id' => 9, 'user_id' => 4],
                ['title' => 'Mathematics', 'description' => 'The study of mathematics as a "demonstrative discipline" began in the 6th century BC with the Pythagoreans.', 'date' => '2023-10-20', 'variable_student' => 70, 'status' => 1, 'major_id' => 10, 'user_id' => 4],
                ['title' => 'International Relations', 'description' => 'International relations (IR) are the interactions among sovereign states.', 'date' => '2023-11-20', 'variable_student' => 80, 'status' => 1, 'major_id' => 11, 'user_id' => 4],
                ['title' => 'History', 'description' => 'The concept of a generation can be used to locate particular birth cohorts in specific historical and cultural circumstances.', 'date' => '2023-11-20', 'variable_student' => 60, 'status' => 1, 'major_id' => 12, 'user_id' => 4],
                ['title' => 'Computer Software Engineering', 'description' => 'Software Engineering has grown and developed from the 1960 till now a lot as our knowledge and understanding of software.', 'date' => '2023-11-20', 'variable_student' => 70, 'status' => 1, 'major_id' => 13, 'user_id' => 4],
            ];

        foreach ($posts as $post) {
            UniversityPost::create($post);
        }
    }
}
