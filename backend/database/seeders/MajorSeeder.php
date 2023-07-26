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
            ['name' => 'Systems Network Administrator', 'description' => 'Hello world', 'year_duration' => 2, 'month_duration' => 0, 'apply_date' => '2023-10-01', 'start_date' => '2023-12-01', 'price' => 700, 'major_type_id' => 1, 'university_id' => 1],
        ];

        foreach($majors as $major)
        {
            Major::create($major);
        }
    }
}
