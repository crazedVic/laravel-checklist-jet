<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Superuser id 1 has own SuperuserAccountSeeder!

        // Firm Admin
        DB::table('department_user')->insert([
            'department_id' => 1,
            'user_id' => 2,
            'team_id' => 3 //Sample IT
        ]);
        DB::table('department_user')->insert([
            'department_id' => 2,
            'user_id' => 2,
            'team_id' => 3 //Sample IT
        ]);
        DB::table('department_user')->insert([
            'department_id' => 3,
            'user_id' => 2,
            'team_id' => 3 //Sample IT
        ]);

        // Firm Editor
        DB::table('department_user')->insert([
            'department_id' => 1,
            'user_id' => 3,
            'team_id' => 3 //Sample IT
        ]);

        // Firm Editor
        DB::table('department_user')->insert([
            'department_id' => 1,
            'user_id' => 5,
            'team_id' => 3 //Sample IT
        ]);
        DB::table('department_user')->insert([
            'department_id' => 2,
            'user_id' => 5,
            'team_id' => 3 //Sample IT
        ]);
        DB::table('department_user')->insert([
            'department_id' => 3,
            'user_id' => 5,
            'team_id' => 3 //Sample IT
        ]);

        // Global Admin All Departments
        DB::table('department_user')->insert([
            'department_id' => 1,
            'user_id' => 9,
            'team_id' => 1
        ]);
        DB::table('department_user')->insert([
            'department_id' => 2,
            'user_id' => 9,
            'team_id' => 1
        ]);
        DB::table('department_user')->insert([
            'department_id' => 3,
            'user_id' => 9,
            'team_id' => 1
        ]);
        DB::table('department_user')->insert([
            'department_id' => 4,
            'user_id' => 9,
            'team_id' => 1
        ]);
        DB::table('department_user')->insert([
            'department_id' => 5,
            'user_id' => 9,
            'team_id' => 1
        ]);
        DB::table('department_user')->insert([
            'department_id' => 6,
            'user_id' => 9,
            'team_id' => 1
        ]);
        DB::table('department_user')->insert([
            'department_id' => 7,
            'user_id' => 9,
            'team_id' => 1
        ]);
        DB::table('department_user')->insert([
            'department_id' => 8,
            'user_id' => 9,
            'team_id' => 1
        ]);

        // Global Editor Marketing
        DB::table('department_user')->insert([
            'department_id' => 5,
            'user_id' => 10,
            'team_id' => 1
        ]);

        //Global Reader HR
        DB::table('department_user')->insert([
            'department_id' => 1,
            'user_id' => 11,
            'team_id' => 1
        ]);
    }
}
