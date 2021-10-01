<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert categories
        DB::table('departments')->insert([
            [
                'id' => 1,
                'name' => 'HR'
            ],
            [
                'id' => 2,
                'name' => 'Legal'
            ],
            [
                'id' => 3,
                'name' => 'Finance'
            ],
            [
                'id' => 4,
                'name' => 'Service'
            ],
            [
                'id' => 5,
                'name' => 'Marketing'
            ],
            [
                'id' => 6,
                'name' => 'Admin' // has access to global account config.
            ],
            [
                'id' => 7,
                'name' => 'Operations'
            ],
            [
                'id' => 8,
                'name' => 'All'
            ]
        ]);
    }
}
