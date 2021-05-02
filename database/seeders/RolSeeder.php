<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Editor']);
        $role3 = Role::create(['name'=>'Usuario']);
        
        Permission::create(['name'=>'roles.index'])->syncPermissions([$role1,$role2]);
        
        Permission::create(['name'=>'roles.edit'])->syncPermissions([$role1,$role2]);
        Permission::create(['name'=>'roles.create'])->syncPermissions([$role1,$role2]);
        Permission::create(['name'=>'roles.index'])->syncPermissions([$role1,$role2]);
        Permission::create(['name'=>'roles.destroy'])->syncPermissions([$role1,$role2]);

        
    }
}
