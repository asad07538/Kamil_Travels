<?php

use Illuminate\Database\Seeder;

class RootAccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('account_heads')->insert([
			'id'=>1,
			'title' => 'Asset',
			'level_id' => 1,
			'active' => 1,
			'added_by' => 1,
		]);
		DB::table('account_heads')->insert([
			'id'=>2,
			'title' => 'Liability',
			'level_id' => 1,
			'active' => 1,
			'added_by' => 1,
		]);
		DB::table('account_heads')->insert([
			'id'=>3,
			'title' => 'Revenue',
			'level_id' => 1,
			'active' => 1,
			'added_by' => 1,
		]);
		DB::table('account_heads')->insert([
			'id'=>4,
			'title' => 'Expances',
			'level_id' => 1,
			'active' => 1,
			'added_by' => 1,
		]);
    }
}
