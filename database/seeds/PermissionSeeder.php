<?php

use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ======================================================
        //none default 
		DB::table('permissions')->insert([
            'id'=>1,
			'name' => 'None',
			'description' => 'No Permissions',
            'allowed'=> 0,
		]);
		DB::table('groups')->insert([
            'id'=>1,
			'name' => 'None',
			'description' => 'No Permissions',
		]);
        // ======================================================
        // Permission permissions

        DB::table('groups')->insert([
            'id'=>2,
            'name' => 'Permission',
            'description' => 'Permissions of Permissions',
        ]);

        DB::table('permissions')->insert([
            'id'=>2,            
            'name' => 'permission-index',
            'description' => 'View All Permissions',
            'allowed'=> 0,
        ]);

        DB::table('group__permissions')->insert([
            'perm_id' => 2,
            'group_id' => 2,
        ]);
        // ======================================================

        // Group Permissions

        DB::table('groups')->insert([
            'id'=>3,
            'name' => 'Group-Permissions',
            'description' => 'All Permissions of Group',
        ]);
        DB::table('permissions')->insert([
            'id'=>3,
            'name' => 'group-index',
            'description' => 'View All Group List',
            'allowed'=> 0,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 3,
            'group_id' => 3,
        ]);
        DB::table('permissions')->insert([
            'id'=>4,
            'name' => 'group-show',
            'description' => 'View a group in detailed ',
            'allowed'=> 0,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 4,
            'group_id' => 3,
        ]);
        DB::table('permissions')->insert([
            'id'=>5,
            'name' => 'group-edit',
            'description' => 'Edit a group',
            'allowed'=> 0,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 5,
            'group_id' => 3,
        ]);
        DB::table('permissions')->insert([
            'id'=>6,
            'name' => 'group-delete',
            'description' => 'Delete a Group',
            'allowed'=> 0,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 6,
            'group_id' => 3,
        ]);
        DB::table('permissions')->insert([
            'id'=>7,
            'name' => 'group-create',
            'description' => 'Delete a Group',
            'allowed'=> 0,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 7,
            'group_id' => 3,
        ]);
        // ======================================================
        // User Permissions

        DB::table('groups')->insert([
            'id'=>4,
            'name' => 'user-permission',
            'description' => 'User all permissions',
        ]);
        DB::table('permissions')->insert([
            'id'=>8,
            'name' => 'user-index',
            'description' => 'View all user',
            'allowed'=> 0,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 8,
            'group_id' => 4,
        ]);
        DB::table('permissions')->insert([
            'id'=>9,
            'name' => 'user-show',
            'description' => 'view a user in detail',
            'allowed'=> 0,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 9,
            'group_id' => 4,
        ]);
        DB::table('permissions')->insert([
            'id'=>10,
            'name' => 'user-edit',
            'description' => 'Edit a user',
            'allowed'=> 0,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 10,
            'group_id' => 4,
        ]);
        DB::table('permissions')->insert([
            'id'=>11,
            'name' => 'user-delete',
            'description' => 'Delete a user',
            'allowed'=> 0,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 11,
            'group_id' => 4,
        ]);
        DB::table('permissions')->insert([
            'id'=>12,
            'name' => 'user-create',
            'description' => 'Delete a user',
            'allowed'=> 0,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 12,
            'group_id' => 4,
        ]);

// Profile Permission
        DB::table('groups')->insert([
            'id'=>5,
            'name' => 'profile-permissions',
            'description' => 'User all permissions',
        ]);
        DB::table('permissions')->insert([
            'id'=>13,
            'name' => 'my-profile',
            'description' => 'View Own Profile',
            'allowed'=> 1,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 13,
            'group_id' => 5,
        ]);
        DB::table('permissions')->insert([
            'id'=>14,
            'name' => 'profile-password-change',
            'description' => 'Change own password',
            'allowed'=> 1,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 14,
            'group_id' => 5,
        ]);
        DB::table('permissions')->insert([
            'id'=>15,
            'name' => 'update-profile',
            'description' => 'Update own profile details',
            'allowed'=> 1,
        ]);
        DB::table('group__permissions')->insert([
            'perm_id' => 15,
            'group_id' => 5,
        ]);


    }
}
