<?php

namespace Database\Seeders;

use App\Models\Major;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $majors =
        [
            ['name' => 'Wep Programming', 'description' => 'Hello world', 'year_duration' => 2, 'month_duration' => 0, 'apply_date' => '2023-10-01', 'start_date' => '2023-12-01', 'price' => 700, 'major_type_id' => 1, 'university_id' => 1],
            ['name' => 'Systems Network Administrator', 'description' => 'Hello world', 'year_duration' => 2, 'month_duration' => 0, 'apply_date' => '2023-10-09', 'start_date' => '2023-12-09', 'price' => 700, 'major_type_id' => 1, 'university_id' => 1],
            ['name' => 'Marketing', 'description' => 'Marketing is fundamentally concerned with the description and prediction of decision outcomes', 'year_duration' => 1, 'month_duration' => 0, 'apply_date' => '2023-08-10', 'start_date' => '2023-08-20', 'price' => 800, 'major_type_id' => 5,'university_id' => 2],
            ['name' => 'Banking and Finance', 'description' => 'Banking and Finance explores the dynamic, fast-paced world of money, shares, credit and investments', 'year_duration' => 3, 'month_duration' => 0, 'apply_date' => '2023-09-08', 'start_date' => '2023-09-20', 'price' => 450, 'major_type_id' => 5,'university_id' => 2],
            ['name' => 'World History of Tourism', 'description' => 'It is widely accepted that the modern-day tourism industry originates in the European Grand Tour', 'year_duration' => 2, 'month_duration' => 0, 'apply_date' => '2023-08-13', 'start_date' => '2023-08-20', 'price' => 600, 'major_type_id' => 7,'university_id' => 3],
            ['name' => 'Electronics and Electricity', 'description' => 'Electronics deals with flow of charge (electron) through non-metal conductors', 'year_duration' => 4, 'month_duration' => 0, 'apply_date' => '2023-08-13', 'start_date' => '2023-08-23', 'price' => 800, 'major_type_id' => 4,'university_id' => 3],
            ['name' => 'Engineering and Architecture', 'description' => 'Architectural engineering focuses its study on the design of all building systems, including the mechanical', 'year_duration' => 4, 'month_duration' => 0, 'apply_date' => '2023-09-10', 'start_date' => '2023-09-20', 'price' => 900, 'major_type_id' => 6,'university_id' => 4],
            ['name' => 'Accounting', 'description' => 'Architectural engineering focuses its study on the design of all building systems, including the mechanical', 'year_duration' => 4, 'month_duration' => 0, 'apply_date' => '2023-09-20', 'start_date' => '2023-09-30', 'price' => 900, 'major_type_id' => 6,'university_id' => 4],
            ['name' => 'Administration', 'description' => 'An Administrator provides office support to either an individual or team and is vital for the smooth-running of a business.', 'year_duration' => 4, 'month_duration' => 0, 'apply_date' => '2023-09-10', 'start_date' => '2023-09-22', 'price' => 500, 'major_type_id' => 6,'university_id' => 5],
            ['name' => 'Mathematics', 'description' => 'Mathematics is an area of knowledge that includes the topics of numbers, formulas and related structures.', 'year_duration' => 4, 'month_duration' => 0, 'apply_date' => '2023-08-09', 'start_date' => '2023-08-20', 'price' => 500, 'major_type_id' => 6,'university_id' => 5],
            ['name' => 'International Relations', 'description' => 'International relations attempts to explain the interactions of states in the global interstate system.', 'year_duration' => 4, 'month_duration' => 0, 'apply_date' => '2023-09-01', 'start_date' => '2023-09-25', 'price' => 500, 'major_type_id' => 6,'university_id' => 6],
            ['name' => 'History', 'description' => 'History is the study of change over time, and it covers all aspects of human society.', 'year_duration' => 4, 'month_duration' => 0, 'apply_date' => '2023-07-30', 'start_date' => '2023-08-09', 'price' => 500, 'major_type_id' => 6,'university_id' => 6],
            ['name' => 'Computer Software Engineering', 'description' => 'If you are considering a major as a computer software engineer, be prepared for a cutting edge and continuously evolving career.', 'year_duration' => 4, 'month_duration' => 0, 'apply_date' => '2023-08-30', 'start_date' => '2023-09-01', 'price' => 300, 'major_type_id' => 1,'university_id' => 7],
        ];

        foreach($majors as $major)
        {
            Major::create($major);
        }
    }
}
