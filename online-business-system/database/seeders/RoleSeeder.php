<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            ['name' => 'admin', 'description' => 'System administrator', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'staff', 'description' => 'Regular staff user', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
// This seeder populates the roles table with initial data for 'admin' and 'staff' roles.
