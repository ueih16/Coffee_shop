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
        $data = [
            [
                'name' => 'sadmin',
                'guard_name' => 'admins',
            ],
            [
                'name' => 'sadmin',
                'guard_name' => 'admins_api',
            ],
            [
                'name' => 'admin',
                'guard_name' => 'admins',
            ],
            [
                'name' => 'admin',
                'guard_name' => 'admins_api',
            ],
            [
                'name' => 'employee',
                'guard_name' => 'employees',
            ],
            [
                'name' => 'employee',
                'guard_name' => 'employees_api',
            ],
        ];
        foreach($data as $item) {
            Role::query()->create($item);
        }
    }
}
