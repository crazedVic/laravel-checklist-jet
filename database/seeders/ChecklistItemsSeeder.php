<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChecklistItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // figuring out checklist item interdependencies
        // first checklist in process 1
        DB::table('checklist_items')->insert([
            'id' => 1,
            'checklist_id' => 3,
            'description' => "Task 1 - NDA Completed"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 2,
            'checklist_id' => 3,
            'parent_item_id' => 1,
            'activated_parent_status' => 'Completed',
            'description' => "Task 2 - LOI Completed - Dep on Task 1 Completed "
        ]);

        DB::table('checklist_items')->insert([
            'id' => 3,
            'checklist_id' => 3,
            'parent_item_id' => 1,
            'activated_parent_status' => 'Active',
//            'required_parent_status' => 'Active',
            'description' => "Task 1A - Draft NDA Supplement Uploaded - Dep on Task 1 Active, Optional"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 4,
            'checklist_id' => 3,
            'parent_item_id' => 3,
            'activated_parent_status' => 'Completed',
            'required' => true,
            'description' => "Task 1B - Vendor Accept NDA Supplement - dep on Task 1A Completed, Required if Task 1A Completed"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 11,
            'checklist_id' => 3,
            'parent_item_id' => 3,
            'activated_parent_status' => 'Completed',
            'required' => true,
            'description' => "Task 1E - Buyer Accept NDA Supplement - dep on Task 1A Completed, Required if Task 1A Completed"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 5,
            'checklist_id' => 3,
            'parent_item_id' => 1,
            'activated_parent_status' => 'Active',
            //'required_parent_status' => 'Active',
            'description' => "Task 1C - dep on Task 1 active - Optional"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 6,
            'checklist_id' => 3,
            'parent_item_id' => 1,
            'activated_parent_status' => 'Active', // not pending or n/a
            'required' => true,
            'description' => "Task 1D - Legal NDA - dep on Task 1 active - Required for Parent to be Completed"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 7,
            'checklist_id' => 3,
            'parent_item_id' => 1,
            'activated_parent_status' => 'Completed',
            'required' => true,
            'description' => "Task 3 - dep on Task 1 Completed"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 8,
            'checklist_id' => 3,
            'parent_item_id' => 4,
            'activated_parent_status' => 'Active',
            'required' => true,
            'description' => "Task 1B1 - NDA Supplement Esignature - dep on Task 1B Active and required if 1B is Completed"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 13,
            'checklist_id' => 3,
            'parent_item_id' => 4,
            'activated_parent_status' => 'Active',
//            'required_parent_status' => 'Completed',
            'description' => "Task 1B2- NDA Supplement Notes- dep on Task 1B Active and optional"
        ]);


        DB::table('checklist_items')->insert([
            'id' => 12,
            'checklist_id' => 3,
            'parent_item_id' => 11,
            'activated_parent_status' => 'Active',
            'required' => true,
            'description' => "Task 1E1 - NDA Supplement Esignature - dep on Task 1B Active and required if 1E is Completed"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 9,
            'checklist_id' => 3,
            'parent_item_id' => 7,
            'activated_parent_status' => 'Active',
            'required' => true,
            'description' => "Task 3A - dep on Task 3 Active"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 10,
            'checklist_id' => 3,
            'parent_item_id' => 7,
            'activated_parent_status' => 'Active',
            'required' => true,
            'description' => "Task 3B - dep on Task 3 active"
        ]);

    }
}
