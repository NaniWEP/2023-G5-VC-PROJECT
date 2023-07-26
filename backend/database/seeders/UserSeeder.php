<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $users =
        [
            ['first_name' => 'Nan', 'last_name' => 'Bet', 'email' => 'nan@gmail.com', 'password' => '12345678', 'gender' => 'MALE', 'date_of_birth' => '2002-07-03', 'province' => 'Phnom Penh', 'role_id' => 2, 'profile_image' => 'nan.png'],
            ['first_name' => 'admin', 'last_name' => '1', 'email' => 'admin1@gmail.com', 'password' => '12345678', 'gender' => 'MALE', 'date_of_birth' => '2002-07-03', 'province' => 'Phnom Penh', 'role_id' => 3, 'profile_image' => 'admin1.png'],
        ];

        foreach($users as $user)
        {
            User::create($user);
        }
    }
}
