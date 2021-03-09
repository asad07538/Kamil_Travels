<?php

use Illuminate\Database\Seeder;

class temp_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('countries')->insert([
			'id'=>1,
			'name' => 'Pakistan',
			'code' => 'pk',
			'dialing_code' => +92,
			]);
		DB::table('cities')->insert([
			'id'=>1,
			'name' => 'Skardu',
			'country_id' => 1,
			]);
		DB::table('locations')->insert([
			'id'=>1,
			'name' => 'Hargisa',
			'city_id' => 1,
			]);
		DB::table('airports')->insert([
			'id'=>1,
			'name' => 'Skardu Airport',
			'iata_code' => "KDU",
			'country_id' => 1,
			]);
		DB::table('airports')->insert([
			'id'=>2,
			'name' => 'Benazir International Airport',
			'iata_code' => "BIA",
			'country_id' => 1,
			]);
    }
}
