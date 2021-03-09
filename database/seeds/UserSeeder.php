<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('users')->insert([
			'id'=>1,
			'name' => 'Asad Ali',
			'email' => 'asad07538@gmail.com',
			'password' => Hash::make('david@pro'),
            'image' => '/images/superuserimage.jpg',
            'cnic' => '71101-2550815-9',
            'type' => 'super_user',
			]);
        DB::table('user__groups')->insert([
            'id'=>1,
            'group_id' => 1,
            'user_id' => 1,
            ]);
        DB::table('user__groups')->insert([
            'id'=>2,
            'group_id' => 2,
            'user_id' => 1,
            ]);
        DB::table('user__groups')->insert([
            'id'=>3,
            'group_id' => 3,
            'user_id' => 1,
            ]);
        DB::table('user__groups')->insert([
            'id'=>4,
            'group_id' => 4,
            'user_id' => 1,
            ]);
        DB::table('user__groups')->insert([
            'id'=>5,
            'group_id' => 5,
            'user_id' => 1,
            ]);
        DB::table('user__groups')->insert([
            'id'=>6,
            'group_id' => 9,
            'user_id' => 1,
            ]);
    }
}
