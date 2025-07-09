<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    public function run()
    {
        $services = DB::table('services')->pluck('id', 'name');

        DB::table('packages')->insert([
            // Web Development Packages
            [
                'service_id'   => $services['Web Development'],
                'name'         => 'Starter',
                'description'  => '4 pages (Home, About Us, Contact, Services) with WhatsApp form, SSL, domain, email, hosting, backups.',
                'price'        => 450000,
                'duration_days'=> 4,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'service_id'   => $services['Web Development'],
                'name'         => 'Intermediate',
                'description'  => '6 pages (Blog, Testimonials), CMS setup, SEO, premium hosting.',
                'price'        => 575000,
                'duration_days'=> 8,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'service_id'   => $services['Web Development'],
                'name'         => 'Pro (Advanced)',
                'description'  => '7+ pages + CMS Admin + E‑Commerce or Chatbot, dashboard, analytics, SEO.',
                'price'        => 800000,
                'duration_days'=> 15,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'service_id'   => $services['Web Development'],
                'name'         => 'Custom System',
                'description'  => 'CMS Website + Custom System (CRM, Inventory), logins, dashboards, forms automation.',
                'price'        => 1000000,
                'duration_days'=> 20,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],

            // Data Cleanup Packages
            [
                'service_id'   => $services['Data Cleanup'],
                'name'         => 'Starter',
                'description'  => 'Clean 1–3 sheets: remove duplicates, formatting, validation.',
                'price'        => 65000,
                'duration_days'=> 2,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'service_id'   => $services['Data Cleanup'],
                'name'         => 'Intermediate',
                'description'  => 'Clean 4–6 sheets; add formulas, summary sheets.',
                'price'        => 125000,
                'duration_days'=> 4,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'service_id'   => $services['Data Cleanup'],
                'name'         => 'Advanced',
                'description'  => 'Clean 7+ sheets; merge data, advanced logic, conditional formats.',
                'price'        => 215000,
                'duration_days'=> 7,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],

            // Dashboard Setup Packages
            [
                'service_id'   => $services['Dashboard Setup'],
                'name'         => 'Starter',
                'description'  => 'Basic Google Sheets/Excel dashboard: summary totals, charts.',
                'price'        => 125000,
                'duration_days'=> 3,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'service_id'   => $services['Dashboard Setup'],
                'name'         => 'Intermediate',
                'description'  => 'Interactive dashboard with filters, charts, multiple sheets.',
                'price'        => 250000,
                'duration_days'=> 6,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'service_id'   => $services['Dashboard Setup'],
                'name'         => 'Advanced',
                'description'  => 'Power BI or Google Data Studio with real‑time updates, external connections.',
                'price'        => 500000,
                'duration_days'=> 10,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],

            // Training & Support Packages
            [
                'service_id'   => $services['Training & Support'],
                'name'         => 'Starter',
                'description'  => '1-on-1 basic Excel/Sheets training with exercises.',
                'price'        => 35000,
                'duration_days'=> 1,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'service_id'   => $services['Training & Support'],
                'name'         => 'Intermediate',
                'description'  => 'Formula training, cleanups, and mini dashboards (half‑day).',
                'price'        => 70000,
                'duration_days'=> 1,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'service_id'   => $services['Training & Support'],
                'name'         => 'Advanced',
                'description'  => 'Project-based learning: build a dashboard or automated workflow over 1–2 days.',
                'price'        => 125000,
                'duration_days'=> 2,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],

            // IT Automation Packages
            [
                'service_id'   => $services['IT Automation'],
                'name'         => 'Starter',
                'description'  => 'Setup Google Form + Sheets sync, email alerts.',
                'price'        => 125000,
                'duration_days'=> 3,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'service_id'   => $services['IT Automation'],
                'name'         => 'Intermediate',
                'description'  => 'Workflow setup: auto folders, approvals, reminders.',
                'price'        => 275000,
                'duration_days'=> 6,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'service_id'   => $services['IT Automation'],
                'name'         => 'Advanced',
                'description'  => 'Google Apps Script custom tools, API integration, dashboards.',
                'price'        => 550000,
                'duration_days'=> 10,
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}
// This seeder populates the packages table with predefined packages for various services.
// Each package is associated with a service and includes details like name, description, price, and duration.
// The data is inserted into the packages table using the Laravel DB facade.
// The services are fetched from the services table to ensure correct service IDs are used.
// The created_at and updated_at timestamps are set to the current time for each package.
// This allows for easy management and retrieval of service packages in the application.
// The packages cover a range of services including web development, data cleanup, dashboard setup, training & support, and IT automation.
// Each package has a specific price and duration, making it easy for customers to choose based on their needs and budget.
// The seeder can be run using the artisan command `php artisan db:seed --class=PackageSeeder` to populate the database with these packages.
//// This is useful for initial setup or testing purposes in a development environment.
// The packages are designed to cater to different levels of complexity and customer requirements, from basic to advanced services.
// This structure allows for scalability and easy updates to the packages as new services or features are added in the future.
// The use of the `pluck` method ensures that the service IDs are correctly mapped to their names, allowing for a clean and efficient insertion of package data.
// The seeder is a crucial part of the database seeding process, providing a foundation for the application's service offerings.
// It can be extended or modified to include additional packages or services as the business grows or changes its offerings.
//// The seeder is part of the Laravel framework's database seeding feature, which allows developers to quickly populate the database with test data or initial data sets.
// This is particularly useful in development and testing environments, where having a set of predefined data can help in building and testing features without needing to manually enter data.
// The packages defined in this seeder can be easily referenced in the application, allowing for dynamic retrieval and display of service offerings to users.
// The structure of the packages allows for easy integration with the application's business logic, enabling features like package selection, pricing calculations, and service management.
// Overall, the PackageSeeder is a well-structured and essential component of the online business system's database setup,
// providing a clear and organized way to manage service packages and their associated details.