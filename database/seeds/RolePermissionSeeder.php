<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Roles
        $roleSuperAdmin = Role::create(['name' => 'superadmin']);
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleEditor = Role::create(['name' => 'editor']);
        $roleUser = Role::create(['name' => 'user']);
        //Permission Lis as array

        $permissions = [

            //dashboard
            'dashboard.view',


            //admin permissions
            'blog.create',
            'blog.view',
            'blog.edit',
            'blog.delete',
            'blog.approve',

            //admin permissions
            'admin.create',
            'admin.view',
            'admin.edit',
            'admin.delete',
            'admin.approve',

            //roll  permissions
            'role.create',
            'role.view',
            'role.edit',
            'role.delete',
            'role.approve',

            //profile  permissions
            'profile.create',
            'profile.view',
            'profile.edit',
            'profile.delete',
            'profile.approve',
        ];

        //Create persmiison and Assign Permission
        // $permission = Permission::create(['name' => 'edit articles']);

        for ($i=0; $i < count($permissions); $i++) {
            // create permission
             $permission = Permission::create(['name' => $permissions[$i]]);
             $roleSuperAdmin->givePermissionTo($permission);
             $permission->assignRole($roleSuperAdmin);

        }


    }
}
