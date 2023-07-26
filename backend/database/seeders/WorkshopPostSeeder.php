<?php

namespace Database\Seeders;

use App\Models\WorkshopPost;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkshopPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $workshopPosts =
        [
            ['name' => 'PUBG tournament PUBG Asia Super Cup 2023 Winter', 'venue' => 'Olapic', 'description' => 'Hello World', 'date' => '2023-12-01', 'time' => '01:00', 'location' => 'Japan', 'organizer' => 'PUBG: Battlegrounds', 'contact' => 'press@escharts.com', 'variable_ticket' => 5000, 'status' => true, 'user_id' => 1],
        ];

        foreach($workshopPosts as $post)
        {
            WorkshopPost::create($post);
        }
    }
}
