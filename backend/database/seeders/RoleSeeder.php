<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = 
        [
            ['role_type' => 'user'],
            ['role_type' => 'manager'],
            ['role_type' => 'admin'],
        ];

        foreach($roles as $role)
        {
            Role::create($role);
        }
    }
}
