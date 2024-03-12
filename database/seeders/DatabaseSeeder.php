<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Designation;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // Call the seeder for departments
        $this->call(DepartmentsTableSeeder::class);

        // Seed sample designations
        $this->call(DesignationsTableSeeder::class);
    }
}
