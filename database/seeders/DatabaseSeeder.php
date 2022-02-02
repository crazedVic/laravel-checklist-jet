<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SuperuserAccountSeeder::class); //adds email account when debugging, microsoft account if not
        $this->call(UserSeeder::class);
        $this->call(GlobalSeeder::class);
        $this->call(DepartmentSeeder::class);
        $this->call(FirmSeeder::class);
        $this->call(TeamUserSeeder::class);
        $this->call(WorkflowSeeder::class);
        $this->call(ChecklistsSeeder::class);
        $this->call(ChecklistItemsSeeder::class);

        $this->call(FirmChecklistsSeeder::class);
        $this->call(FirmChecklistItemsSeeder::class);
    }
}
