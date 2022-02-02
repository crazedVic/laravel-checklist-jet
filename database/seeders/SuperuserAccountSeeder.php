<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class SuperuserAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //add email super user account
        if (env('APP_DEBUG'))
        {
            DB::table('users')->insert([
                'name' => "SuperAdmin",
                'email' => 'su@su.com',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'current_team_id' => 1,
                'timezone' => 'America/New_York'
            ]);
        }
        //add microsoft super user account
        else
        {
            DB::table('users')->insert([
                'name' => "SuperAdmin",
                'email' => 'developer@mspcorp.ca',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
                'created_at' => now(),
                'updated_at' => now(),
                'lastlogin_at' => now(),
                'current_team_id' => 1,
                'timezone' => 'America/New_York'
            ]);
        }


        DB::table('team_user')->insert([
            'team_id' => 1,
            'user_id' => 1,
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //assign to All departments
        DB::table('department_user')->insert([
            'department_id' => 1,
            'user_id' => 1,
            'team_id' => 1
        ]);
        DB::table('department_user')->insert([
            'department_id' => 2,
            'user_id' => 1,
            'team_id' => 1
        ]);
        DB::table('department_user')->insert([
            'department_id' => 3,
            'user_id' => 1,
            'team_id' => 1
        ]);
        DB::table('department_user')->insert([
            'department_id' => 4,
            'user_id' => 1,
            'team_id' => 1
        ]);
        DB::table('department_user')->insert([
            'department_id' => 5,
            'user_id' => 1,
            'team_id' => 1
        ]);
        DB::table('department_user')->insert([
            'department_id' => 6,
            'user_id' => 1,
            'team_id' => 1
        ]);
    }
}
