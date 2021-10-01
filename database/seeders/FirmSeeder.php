<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function PHPSTORM_META\map;

class FirmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //team for company 2
        DB::table('teams')->insert([
            'id' => 3,
            'user_id' => 1, //always 1 for super admin
            'name' => "Simple IT Services Inc",
            'personal_team' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //team for company 3
        DB::table('teams')->insert([
            'id' => 4,
            'user_id' => 1, //always 1 for superadmin
            'name' => "Aardvark IT Consulting Ltd.",
            'personal_team' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //team for company 4
        DB::table('teams')->insert([
            'id' => 5,
            'user_id' => 1, //always 1 for superadmin
            'name' => "Purple Tek Digital",
            'personal_team' => false,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        //insert company two
        DB::table('firms')->insert([
            'team_id' => 3,
            'name' => 'Simple IT Services Inc',
            'status' => 'Active',
            'description' => 'Company 1 does good IT stuff',
            'city' => 'Richmond',
            'province' => 'BC',
            'country' => 'CA',
            'company_website' => 'simpleIt.com',
            'company_website_verified' => 0,
            'company_linkedin' => '',
            'company_linkedin_verified' => 0,
            'company_phone' => '+1 (604) 275 5100',
            'employee_size' => '10 to 19',
            'year_founded' => 2000,
            'location_count' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //insert company three
        DB::table('firms')->insert([
            'team_id' => 4,
            'name' => 'Aardvark IT Consulting Ltd.',
            'status' => 'Active',
            'description' => 'This is company 2, a good IT company',
            'city' => 'Richmond',
            'province' => 'BC',
            'country' => 'CA',
            'company_website' => 'aaa.com',
            'company_website_verified' => 0,
            'company_linkedin' => '',
            'company_linkedin_verified' => 0,
            'company_phone' => '+1 (604) 275 5100',
            'employee_size' => '10 to 19',
            'year_founded' => 2000,
            'location_count' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        //insert company four
        DB::table('firms')->insert([
            'team_id' => 5,
            'name' => 'Purple Tek Digital',
            'status' => 'Active',
            //'logo_url' => '/storage/logos/mtek.jpg',
            'description' => 'Managed IT Services, Firm support and Marketing. No empty promises, affordable experience without the hype.',
            'city' => 'Edmonton',
            'province' => 'AB',
            'country' => 'CA',
            'company_website' => 'purptekdigital.ca',
            'company_website_verified' => 1,
            'company_linkedin' => 'https://www.linkedin.com/company/mtekdigital',
            'company_linkedin_verified' => 1,
            'company_phone' => '780-555-2525',
            'company_phone_secondary' => '1-888-555-4525',
            'employee_size' => '10 to 19',
            'year_founded' => 1995,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
