<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Role;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role as ModelsRole;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $permissions = [
            'manage statistics',
            'manage products',
            'manage pronciples',
            'manage testimonials',
            'manage clients',
            'manage teams',
            'manage abouts',
            'manage appointments',
            'manage hero sections'
        ];

        foreach($permissions as $permission){
            Permission::firstOrcreate(
                [
                    'name' => $permission
                ]
                );
        }

        $managerRole = ModelsRole::firstOrcreate([
            'name' => 'manager'
        ]);

        $managerPermissions = [
            'manage products',
            'manage pronciples',
            'manage testimonials'
        ];
        $managerRole->syncPermissions($managerPermissions);

    
    $superAdminRole = ModelsRole::firstOrcreate(
        [
        'name' => 'super_admin'
        ]
        );
    $user = User::create([
        'name' => 'SuperAdmin',
        'email' => 'admin@gmail.com',
        'password'=> bcrypt('12345')
    ]);

    $user->assignRole($superAdminRole);

    }
}
