<?php

use Illuminate\Database\Seeder;

class LevelAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('account_levels')->insert([
			'id'=>1,
			'name' => 'Level One',
			'description' => "Level One"
		]);
		DB::table('account_levels')->insert([
			'id'=>2,
			'name' => 'Level Two',
			'description' => "Level Two"
		]);
		DB::table('account_levels')->insert([
			'id'=>3,
			'name' => 'Level Three',
			'description' => "Level Three"
		]);
    }
}
