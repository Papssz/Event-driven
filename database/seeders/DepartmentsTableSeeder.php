<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentsTableSeeder extends Seeder
{
    public function run()
    {
        
        Department::create([
            'department_name' => 'HR',
            'status' => 'active',
        ]);

        Department::create([
            'department_name' => 'Finance',
            'status' => 'active',
        ]);

        Department::create([
            'department_name' => 'Marketing',
            'status' => 'active',
        ]);

        
    }
}

