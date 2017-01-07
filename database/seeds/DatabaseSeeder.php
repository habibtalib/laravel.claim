<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * php artisan seed
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->call(PreDataSeeder::class);
        // $this->call(SettingsTableSeeder::class);
        $this->call(ClaimTableSeeder::class);

    }
}
