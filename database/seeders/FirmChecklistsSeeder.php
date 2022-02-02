<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FirmChecklistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = now();
        date_add($date, date_interval_create_from_date_string('30 days'));

        DB::table('firm_checklists')->insert([
            'name' => "Due Diligence Checklist",
            'description' => 'Track due diligence requirements for new acquisition.',
            'checklist_id' => 1,
            'checklistof_id' => 2,
            'checklistof_type' => 'App\Models\Firm',
//            'frequency' => "none",
//            'day' => 0,
//            "current" => true,
//            "status" => "Pending"
        ]);

        DB::table('firm_checklists')->insert([
            'name' => "September 2021 Financial Reports",
            'description' => 'Monthly reports to be uploaded.',
            'checklist_id' => 2,
            'checklistof_id' => 2,
            'checklistof_type' => 'App\Models\Firm',
            'frequency' => "Monthly",
            'day' => 15,
            "current" => true,
            "status" => "Pending",
            'department' => "Finance",
            'reminder_at' => date_format($date, 'Y-m-d')
        ]);

        DB::table('firm_checklists')->insert([
            'name' => "Firm - Testing Dependency Checklist",
            'description' => 'Firm - Figuring out how to handle related parent and child items',
            'checklist_id' => 3,
            'checklistof_id' => 2,
            'checklistof_type' => 'App\Models\Firm'
        ]);
    }
}
