<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class GlobalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //global team
        \DB::table('teams')->insert([
            'id' => 1,
            'user_id' => 1, //always 1 for superadmin
            'name' => "Global",
            'personal_team' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //insert global company
        \DB::table('firms')->insert([
            'team_id' => 1,
            'name' => 'Global',
            'status' => 'System',
            'description' => 'Global company',
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
