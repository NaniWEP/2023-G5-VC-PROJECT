<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $universities =
        [
            ['name' => 'PNC', 'description' => 'Hello PNC', 'website' => 'https://www.passerellesnumeriques.org/en/our-actions/cambodia/', 'email' => 'info.cambodia@passerellesnumeriques.org', 'phone' => '+855 23 99 55 00', 'location' => 'BP 511 St. 371 Phum Tropeang Chhuk (Borey Sorla)
            Sangkat Tek Thla, Khan Sen Sok
            Phnom Penh CAMBODIA', 'province' => 'Phnom Penh', 'user_id' => 1],

        ];

        foreach($universities as $university)
        {
            University::create($university);
        }
    }
}
