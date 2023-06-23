<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'guard_name' => 'web',
            'name' => 'Administrator'
        ]);

        Role::create([
            'guard_name' => 'web',
            'name' => 'USER DITRESKRIMUM'
        ]);

        Role::create([
            'guard_name' => 'web',
            'name' => 'USER DITLANTAS'
        ]);

        Role::create([
            'guard_name' => 'web',
            'name' => 'USER DITRESKRIMSUS'
        ]);

        Role::create([
            'guard_name' => 'web',
            'name' => 'USER DITPOLAIRUD'
        ]);

        Role::create([
            'guard_name' => 'web',
            'name' => 'USER DITRESNARKOBA'
        ]);
    }
}
