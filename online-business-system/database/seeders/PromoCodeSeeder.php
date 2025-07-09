<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PromoCodeSeeder extends Seeder
{
    public function run()
    {
        DB::table('promo_codes')->insert([
            [
                'code'           => 'WELCOME10',
                'discount_type'  => 'percentage',
                'discount_value' => 1000.00,
                'expires_at'     => now()->addMonths(1),
                'usage_limit'    => 100,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
            [
                'code'           => 'FLAT5000',
                'discount_type'  => 'fixed',
                'discount_value' => 5000.00,
                'expires_at'     => now()->addMonths(3),
                'usage_limit'    => 50,
                'created_at'     => now(),
                'updated_at'     => now(),
            ],
        ]);
    }
}
// This seeder populates the promo_codes table with initial data for testing and development purposes.
// It includes two promo codes: one for a 10% discount and another for a flat ₹5000 discount.
// The promo codes have different expiration dates and usage limits to simulate real-world scenarios.
// The created_at and updated_at fields are set to the current timestamp to reflect when the records were created.
// This setup allows developers to test the promo code functionality without needing to manually insert data into the