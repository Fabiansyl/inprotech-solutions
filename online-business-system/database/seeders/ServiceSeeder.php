<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('services')->insert([
            [
                'name'        => 'Web Development',
                'description' => 'Custom websites and web applications.',
                'price'       => 450000,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Data Cleanup',
                'description' => 'Cleaning and organizing spreadsheet data.',
                'price'       => 50000,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Dashboard Setup',
                'description' => 'Interactive Excel/Sheets dashboards.',
                'price'       => 100000,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Training & Support',
                'description' => 'One-on-one or group training sessions.',
                'price'       => 30000,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'IT Automation',
                'description' => 'Workflow automation and integrations.',
                'price'       => 100000,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ]);
    }
}
// This seeder populates the services table with initial data for various services offered by the business.
// It includes services like Web Development, Data Cleanup, Dashboard Setup, Training & Support, and IT Automation.
// Each service has a name, description, price, and timestamps for creation and updates.
