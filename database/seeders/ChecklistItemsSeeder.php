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
            'description' => "Task 1"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 2,
            'checklist_id' => 3,
            'parent_item_id' => 1,
            'activated_parent_status' => 'Completed',
            'description' => "Task 2 - dep on Task 1 complete"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 3,
            'checklist_id' => 3,
            'parent_item_id' => 1,
            'activated_parent_status' => 'Active',
            'required_parent_status' => 'Active',
            'description' => "Task 1A - dep on Task 1 active"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 4,
            'checklist_id' => 3,
            'parent_item_id' => 1,
            'activated_parent_status' => 'Active',
            'required_parent_status' => 'Active',
            'description' => "Task 1B - dep on Task 1 active"
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
            'parent_item_id' => 5,
            'activated_parent_status' => 'Active', // not pending or n/a
            'required_parent_status' => 'Completed',
            'description' => "Task 1D - dep on Task 1 active - required if Parent Completed"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 7,
            'checklist_id' => 3,
            'parent_item_id' => 1,
            'activated_parent_status' => 'Completed',
            'required_parent_status' => 'Completed',
            'description' => "Task 3 - dep on Task 1 Complete"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 8,
            'checklist_id' => 3,
            'parent_item_id' => 4,
            'activated_parent_status' => 'Active',
            'required_parent_status' => 'Active',
            'description' => "Task 1B1 - dep on Task 1B active"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 9,
            'checklist_id' => 3,
            'parent_item_id' => 7,
            'activated_parent_status' => 'Active',
            'required_parent_status' => 'Active',
            'description' => "Task 3A - dep on Task 3 active"
        ]);

        DB::table('checklist_items')->insert([
            'id' => 10,
            'checklist_id' => 3,
            'parent_item_id' => 7,
            'activated_parent_status' => 'Active',
            'required_parent_status' => 'Active',
            'description' => "Task 3B - dep on Task 3 active"
        ]);

    }
}
