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
        // $this->call(UsersTableSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RootAccountsSeeder::class);
        $this->call(HeadAccoutSeeder::class);
        $this->call(LevelAccountsSeeder::class);
        $this->call(temp_seeder::class);
        $this->call(BasicSeeder::class);
    }
}
