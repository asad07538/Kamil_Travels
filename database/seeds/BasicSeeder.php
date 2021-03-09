<?php

use Illuminate\Database\Seeder;

class BasicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //




        DB::table('groups')->insert([
            'id'=>7,
            'name' => 'admin-permissions',
            'description' => 'Admin permissions',
        ]);
        DB::table('groups')->insert([
            'id'=>8,
            'name' => 'employee-permissions',
            'description' => 'Employee permissions',
        ]);
        DB::table('groups')->insert([
            'id'=>10,
            'name' => 'agent-permissions',
            'description' => 'Employee permissions',
        ]);



        DB::table('permissions')->insert([
            'id'=>16,
            'name' => 'sale',
            'description' => 'Update own profile details',
            'allowed'=> 1,
        ]);
        DB::table('permissions')->insert([
            'id'=>17,
            'name' => 'refund',
            'description' => 'Update own profile details',
            'allowed'=> 1,
        ]);
        DB::table('permissions')->insert([
            'id'=>18,
            'name' => 'transaction',
            'description' => 'Update own profile details',
            'allowed'=> 1,
        ]);
        DB::table('permissions')->insert([
            'id'=>19,
            'name' => 'voucher',
            'description' => 'Update own profile details',
            'allowed'=> 1,
        ]);
        DB::table('permissions')->insert([
            'id'=>20,
            'name' => 'accounts',
            'description' => 'Update own profile details',
            'allowed'=> 1,
        ]);
        DB::table('permissions')->insert([
            'id'=>21,
            'name' => 'setting',
            'description' => 'Update own profile details',
            'allowed'=> 1,
        ]);
        DB::table('permissions')->insert([
            'id'=>22,
            'name' => 'car',
            'description' => 'Update own profile details',
            'allowed'=> 1,
        ]);
        DB::table('permissions')->insert([
            'id'=>23,
            'name' => 'hotel',
            'description' => 'Update own profile details',
            'allowed'=> 1,
        ]);

// customer management
        DB::table('groups')->insert([
            'id'=>6,
            'name' => 'customer-permissions',
            'description' => 'Customer permissions',
        ]);
        DB::table('permissions')->insert([
            'id'=>24,
            'name' => 'customer',
            'description' => 'Update own profile details',
            'allowed'=> 1,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 24,
            'group_id' => 6,
        ]);

//super user management
        DB::table('groups')->insert([
            'id'=>9,
            'name' => 'Super-User-permissions',
            'description' => 'Super User permissions',
        ]);
        DB::table('permissions')->insert([
            'id'=>25,
            'name' => 'user_management',
            'description' => 'Update own profile details',
            'allowed'=> 1,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 25,
            'group_id' => 9,
        ]);

    }
}
