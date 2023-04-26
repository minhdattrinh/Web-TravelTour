<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
            CategoriesTableSeeder::class,
            PaymentsTableSeeder::class,
            // ToursTableSeeder::class,
            // RatingsTableSeeder::class,
            // OrdersTableSeeder::class
        ]);

        // $this->call(SlidesTableSeeder::class);
    }
}
