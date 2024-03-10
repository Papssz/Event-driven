<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert sample department data
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

        // Add more departments as needed
    }
}

