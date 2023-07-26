<?php

namespace Database\Seeders;

use App\Models\MajorType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MajorTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $majorTyes =
        [
            ['name' => 'Computer Science & IT'],
            ['name' => 'Law'],
            ['name' => 'Medicine & Health'],
            ['name' => 'Engeering & Technology'],
            ['name' => 'Business & Management'],
            ['name' => 'Art, Design & Archeticture'],
            ['name' => 'Social Sciences'],
            ['name' => 'Agriculture & Forestry'],
            ['name' => 'Journalism & Media'],
        ];

        foreach($majorTyes as $majorType)
        {
            MajorType::create($majorType);
        }
    }
}
