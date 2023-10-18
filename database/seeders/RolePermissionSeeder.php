<?php

namespace Database\Seeders;

use App\Models\Module;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'dashboard.view',

            'hrm.department.view',
            'hrm.department.create',
            'hrm.department.edit',
            'hrm.department.status',
            'hrm.department.view__one',
            'hrm.department.delete',

            'hrm.designation.view',
            'hrm.designation.create',
            'hrm.designation.edit',
            'hrm.designation.status',
            'hrm.designation.view__one',
            'hrm.designation.delete',

            'hrm.employee.view',
            'hrm.employee.create',
            'hrm.employee.edit',
            'hrm.employee.status',
            'hrm.employee.view__one',
            'hrm.employee.delete',

            'platform.view',
            'platform.create',
            'platform.edit',
            'platform.status',
            'platform.delete',

            'report.mis.ipd.view',
            'report.mis.ipd..create',
            'report.mis.ipd..edit',
            'report.mis.ipd..status',
            'report.mis.ipd..view__one',
            'report.mis.ipd..delete',
        ];

        $operation = [
            'dashboard',

            'department',
            'department',
            'department',
            'department',
            'department',
            'department',

            'designation',
            'designation',
            'designation',
            'designation',
            'designation',
            'designation',

            'employee',
            'employee',
            'employee',
            'employee',
            'employee',
            'employee',

            'platform',
            'platform',
            'platform',
            'platform',
            'platform',

            'ipd',
            'ipd',
            'ipd',
            'ipd',
            'ipd',
            'ipd',
        ];

        $Module = Module::create([
            'name' => 'hrm'
        ]);

        Module::create([
            'name' => 'platform'
        ]);

        Module::create([
            'name' => 'report',
        ]);

        $admin =  User::create([
            'name' => 'Admin',
            'email' => 'admin@domain.com',
            'password' => bcrypt('password')
        ]);

        $role = Role::create(['name' => 'admin']);

        for ($i = 0; $i < count($permissions); $i++) {
            Permission::create(['name' => $permissions[$i], 'module_id' => $Module->id, 'operation' => $operation[$i]]);
        }
        $permissions = Permission::get();
        $role->syncPermissions($permissions);
        $admin->assignRole($role);
    }
}
