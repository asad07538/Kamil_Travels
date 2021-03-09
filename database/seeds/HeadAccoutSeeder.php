<?php

use Illuminate\Database\Seeder;

class HeadAccoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
// ==========================================================
//banks
		DB::table('account_heads')->insert([
			'id'=>5,			'title' => 'Banks',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);

// ==========================================================
// Customer
		DB::table('account_heads')->insert([
			'id'=>6,			'title' => 'Customer-General',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
		DB::table('account_heads')->insert([
			'id'=>7,			'title' => 'Customer-refund',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
		DB::table('account_heads')->insert([
			'id'=>8,			'title' => 'Customer-agreement',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
// ==========================================================
// Employee
		DB::table('account_heads')->insert([
			'id'=>9,			'title' => 'Employee-General',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
		DB::table('account_heads')->insert([
			'id'=>10,			'title' => 'Employee-Salary',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
		DB::table('account_heads')->insert([
			'id'=>11,			'title' => 'Employee-Loan',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
		DB::table('account_heads')->insert([
			'id'=>12,			'title' => 'Employee-Mistake',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);

		DB::table('account_heads')->insert([
			'id'=>13,			'title' => 'Employee-Allowed-Expance',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
// ==========================================================
//Car Company 
		DB::table('account_heads')->insert([
			'id'=>14,			'title' => 'Car-Company-general',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
// Driver Account
		DB::table('account_heads')->insert([
			'id'=>15,			'title' => 'Driver-general',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
// ==========================================================
// Hotel
		DB::table('account_heads')->insert([
			'id'=>16,			'title' => 'Hotel-general',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
// ==========================================================
// Airline
		DB::table('account_heads')->insert([
			'id'=>17,			'title' => 'Airline-general',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
		DB::table('account_heads')->insert([
			'id'=>18,			'title' => 'Airline-commission',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
		DB::table('account_heads')->insert([
			'id'=>19,			'title' => 'Airline-service-charge',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
		DB::table('account_heads')->insert([
			'id'=>20,			'title' => 'Airline-refund',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
		DB::table('account_heads')->insert([
			'id'=>21,			'title' => 'Airline-wht',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
		DB::table('account_heads')->insert([
			'id'=>22,			'title' => 'Airline-agreement',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
// ==========================================================
// general account
		DB::table('account_heads')->insert([
			'id'=>23,			'title' => 'Commission',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
		DB::table('account_heads')->insert([
			'id'=>24,			'title' => 'service_charge',
			'level_id' => 2,	'active' => 1,
			'added_by' => 1,	'parent_id' => 1,
		]);
    }
}
