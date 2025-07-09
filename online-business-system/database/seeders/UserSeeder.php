<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        // fetch the admin role ID
        $adminRoleId = DB::table('roles')->where('name', 'admin')->value('id');

        DB::table('users')->insert([
            'name'       => 'Super Admin',
            'email'      => 'admin@inprotech.com',
            'password'   => Hash::make('password123'),  // change this in production
            'role_id'    => $adminRoleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
// This seeder creates a default user with the admin role.