<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamUserSeeder extends Seeder
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
        DB::table('team_user')->insert([
            'team_id' => 3,
            'user_id' => 2,
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Firm Editor
        DB::table('team_user')->insert([
            'team_id' => 3,
            'user_id' => 3,
            'role' => 'editor',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Firm Reader
        DB::table('team_user')->insert([
            'team_id' => 3,
            'user_id' => 4,
            'role' => 'reader',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Firm Admin
        DB::table('team_user')->insert([
            'team_id' => 4,
            'user_id' => 5,
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Firm Editor
        DB::table('team_user')->insert([
            'team_id' => 4,
            'user_id' => 6,
            'role' => 'editor',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Firm Reader
        DB::table('team_user')->insert([
            'team_id' => 4,
            'user_id' => 7,
            'role' => 'reader',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Isaac MS Account
        DB::table('team_user')->insert([
            'team_id' => 2,
            'user_id' => 8,
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Global Accounts

        // Global Admin
        DB::table('team_user')->insert([
            'team_id' => 1,
            'user_id' => 9,
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Global Editor
        DB::table('team_user')->insert([
            'team_id' => 1,
            'user_id' => 10,
            'role' => 'editor',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Global Reader
        DB::table('team_user')->insert([
            'team_id' => 1,
            'user_id' => 11,
            'role' => 'reader',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
