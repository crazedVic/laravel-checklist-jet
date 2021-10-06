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
            'name' => "Firm - Checklist 1 No Process",
            'description' => 'Firm - Checklist 1 No Process',
            'checklist_id' => 1,
            'checklistof_id' => 1,
            'checklistof_type' => 'App\Models\Firm'
        ]);

        DB::table('firm_checklists')->insert([
            'name' => "Firm - Checklist 2 No Process",
            'description' => 'Firm - Checklist 2 No Process',
            'checklist_id' => 2,
            'checklistof_id' => 1,
            'checklistof_type' => 'App\Models\Firm'
        ]);

        DB::table('firm_checklists')->insert([
            'name' => "Firm - Checklist 3 - Process 1, Order 1",
            'description' => 'Firm - Checklist 3 - Process 1, Order 1',
            'process_id' => 1,
            'process_order' => 1,
            'checklist_id' => 3,
            'checklistof_id' => 1,
            'checklistof_type' => 'App\Models\Firm'
        ]);

        DB::table('firm_checklists')->insert([
            'name' => "Firm - Checklist 3 - Process 1, Order 2",
            'description' => 'Firm - Checklist 4 - Process 1, Order 2',
            'process_id' => 1,
            'process_order' => 1,
            'checklist_id' => 4,
            'checklistof_id' => 1,
            'checklistof_type' => 'App\Models\Firm'
        ]);
    }
}
