<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Doctrine\DBAL\Schema\Schema;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Superuser id 1 has own SuperuserAccountSeeder!

        //admin account id 2
        DB::table('users')->insert([
            'id' => 2,
            'name' => "Admin",
            'email' => 'ad@ad.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'current_team_id' => 3,
            'timezone' => 'America/New_York'
        ]);

        //editor account id 3
        DB::table('users')->insert([
            'id' => 3,
            'name' => "HR Editor",
            'email' => 'ed@ed.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'current_team_id' => 3,
            'timezone' => 'America/New_York'
        ]);

        //reader account id 4
        DB::table('users')->insert([
            'id' => 4,
            'name' => "Reader",
            'email' => 're@re.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'current_team_id' => 3,
            'timezone' => 'America/New_York'
        ]);

        //******************************************************************** */

        //admin account id 5
        DB::table('users')->insert([
            'id' => 5,
            'name' => "Admin",
            'email' => 'ad2@ad2.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'current_team_id' => 4,
            'timezone' => 'America/New_York'
        ]);

        //editor account
        DB::table('users')->insert([
            'id' => 6,
            'name' => "Editor",
            'email' => 'ed2@ed2.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'current_team_id' => 4,
            'timezone' => 'America/New_York'
        ]);

        //reader account
        DB::table('users')->insert([
            'id' => 7,
            'name' => "Reader",
            'email' => 're2@re2.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'current_team_id' => 4,
            'timezone' => 'America/New_York'
        ]);

        /********************************************** */
        //Isaac microsoft account
        DB::table('users')->insert([
            'id' => 8,
            'name' => "Developer 2",
            'email' => 'developer2@mspcorp.ca',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'current_team_id' => 2,
            'timezone' => 'America/New_York'

            //CODE: hk4JJEfHZi-BcBL9CbALS
        ]);


        // other global roles
        //admin account id 2
        DB::table('users')->insert([
            'id' => 9,
            'name' => "Global All Admin",
            'email' => 'gad@gad.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'current_team_id' => 1,
            'timezone' => 'America/New_York'
        ]);

        //editor account id 3
        DB::table('users')->insert([
            'id' => 10,
            'name' => "Global Marketing Editor",
            'email' => 'ged@ged.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'current_team_id' => 1,
            'timezone' => 'America/New_York'
        ]);

        //reader account id 4
        DB::table('users')->insert([
            'id' => 11,
            'name' => "Global HR Reader",
            'email' => 'gre@gre.com',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'current_team_id' => 1,
            'timezone' => 'America/New_York'
        ]);

    }
}
