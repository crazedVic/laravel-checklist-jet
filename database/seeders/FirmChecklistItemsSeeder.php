<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FirmChecklistItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // items related to the parent-children dependency testing
        DB::table('firm_checklist_items')->insert([
            'id' => 1,
            'firm_checklist_id' => 3,
            "status" => "Active",
            'description' => "Task 1 - NDA Completed"
        ]);

        DB::table('firm_checklist_items')->insert([
            'id' => 2,
            'firm_checklist_id' => 3,
            'firm_parent_item_id' => 1,
            'activated_parent_status' => 'Completed',
            "status" => "Active",
            'description' => "Task 2 - LOI Completed - Dep on Task 1 Completed "
        ]);

        DB::table('firm_checklist_items')->insert([
            'id' => 3,
            'firm_checklist_id' => 3,
            'firm_parent_item_id' => 1,
            'activated_parent_status' => 'Active',
            "status" => "Active",
            'description' => "Task 1A - Draft NDA Supplement Uploaded - Dep on Task 1 Active, Optional"
        ]);

        DB::table('firm_checklist_items')->insert([
            'id' => 4,
            'firm_checklist_id' => 3,
            'firm_parent_item_id' => 3,
            'activated_parent_status' => 'Completed',
            'required' => true,
            "status" => "Active",
            'description' => "Task 1B - Vendor Accept NDA Supplement - dep on Task 1A Completed, Required if Task 1A Completed"
        ]);

        DB::table('firm_checklist_items')->insert([
            'id' => 11,
            'firm_checklist_id' => 3,
            'firm_parent_item_id' => 3,
            'activated_parent_status' => 'Completed',
            'required' => true,
            "status" => "Pending",
            'description' => "Task 1E - Buyer Accept NDA Supplement - dep on Task 1A Completed, Required if Task 1A Completed"
        ]);

        DB::table('firm_checklist_items')->insert([
            'id' => 5,
            'firm_checklist_id' => 3,
            'firm_parent_item_id' => 1,
            'activated_parent_status' => 'Active',
            "status" => "Pending",
            'description' => "Task 1C - dep on Task 1 active - Optional"
        ]);

        DB::table('firm_checklist_items')->insert([
            'id' => 6,
            'firm_checklist_id' => 3,
            'firm_parent_item_id' => 1,
            'activated_parent_status' => 'Active',
            'required' => true,
            "status" => "Pending",
            'description' => "Task 1D - Legal NDA - dep on Task 1 active - Required for Parent to be Completed"
        ]);

        DB::table('firm_checklist_items')->insert([
            'id' => 7,
            'firm_checklist_id' => 3,
            'firm_parent_item_id' => 1,
            'activated_parent_status' => 'Completed',
            'required' => true,
            "status" => "Pending",
            'description' => "Task 3 - dep on Task 1 Completed"
        ]);

        DB::table('firm_checklist_items')->insert([
            'id' => 8,
            'firm_checklist_id' => 3,
            'firm_parent_item_id' => 4,
            'activated_parent_status' => 'Active',
            'required' => true,
            "status" => "Pending",
            'description' => "Task 1B1 - NDA Supplement Esignature - dep on Task 1B Active and required if 1B is Completed"
        ]);

        DB::table('firm_checklist_items')->insert([
            'id' => 13,
            'firm_checklist_id' => 3,
            'firm_parent_item_id' => 4,
            'activated_parent_status' => 'Active',
            "status" => "Pending",
            'description' => "Task 1B2- NDA Supplement Notes- dep on Task 1B Active and optional"
        ]);

        DB::table('firm_checklist_items')->insert([
            'id' => 12,
            'firm_checklist_id' => 3,
            'firm_parent_item_id' => 11,
            'activated_parent_status' => 'Active',
            'required' => true,
            "status" => "Pending",
            'description' => "Task 1E1 - NDA Supplement Esignature - dep on Task 1B Active and required if 1E is Completed"
        ]);

        DB::table('firm_checklist_items')->insert([
            'id' => 9,
            'firm_checklist_id' => 3,
            'firm_parent_item_id' => 7,
            'activated_parent_status' => 'Active',
            'required' => true,
            "status" => "Pending",
            'description' => "Task 3A - dep on Task 3 Active"
        ]);

        DB::table('firm_checklist_items')->insert([
            'id' => 10,
            'firm_checklist_id' => 3,
            'firm_parent_item_id' => 7,
            'activated_parent_status' => 'Active',
            'required' => true,
            "status" => "Pending",
            'description' => "Task 3B - dep on Task 3 active"
        ]);

    }
}
