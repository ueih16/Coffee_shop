<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::updateOrCreate([
           'name' => 'Employee',
           'email' => 'employee@gmail.com',
           'password' => bcrypt('123123123'),
        ])->assignRole(['employee']);

        Employee::updateOrCreate([
           'name' => 'Employee',
           'email' => 'employee1@gmail.com',
           'password' => bcrypt('123123123'),
        ])->assignRole(['employee']);
    }
}
