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
            ['first_name' => 'Doeur', 'last_name' => 'Diet', 'email' => 'doeur@gmail.com', 'password' => '12345678', 'gender' => 'MALE', 'date_of_birth' => '2002-09-03', 'province' => 'Siem Reap', 'role_id' => 1, 'profile_image' => 'doeur.png'],
            ['first_name' => 'Phearom', 'last_name' => 'Chea', 'email' => 'phearom@gmail.com', 'password' => '12345678', 'gender' => 'MALE', 'date_of_birth' => '2002-08-03', 'province' => 'Phnom Penh', 'role_id' => 2, 'profile_image' => 'phearom.png'],
            ['first_name' => 'Thana', 'last_name' => 'Chhoeun', 'email' => 'thana@gmail.com', 'password' => '12345678', 'gender' => 'FEMALE', 'date_of_birth' => '2001-03-10', 'province' => 'Kampong Thom', 'role_id' => 2, 'profile_image' => 'thana.png'],
            ['first_name' => 'Socheat', 'last_name' => 'Lun', 'email' => 'socheat@gmail.com', 'password' => '12345678', 'gender' => 'MALE', 'date_of_birth' => '2002-07-03', 'province' => 'Kampong Thom', 'role_id' => 3, 'profile_image' => 'socheat.png'],
        ];

        foreach($users as $user)
        {
            User::create($user);
        }
    }
}
