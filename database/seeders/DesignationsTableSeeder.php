<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Designation;

class DesignationsTableSeeder extends Seeder
{
    public function run()
    {
        // Define sample designations
        $designations = [
            ['designation_name' => 'Manager', 'department_id' => 1, 'status' => 'active'],
            ['designation_name' => 'Supervisor', 'department_id' => 1, 'status' => 'active'],
            ['designation_name' => 'Developer', 'department_id' => 2, 'status' => 'active'],
            // Add more sample designations as needed
        ];

        // Insert the sample designations into the database
        Designation::insert($designations);
    }
}
