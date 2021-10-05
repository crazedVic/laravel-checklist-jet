<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChecklistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('checklists')->insert([
            'id' => 1,
            'author_id' => 1,
            'name' => "Checklist 1 No Process",
            'description' => 'This is the second checklist within the deals process'
        ]);

        DB::table('checklists')->insert([
            'id' => 2,
            'author_id' => 1,
            'name' => "Checklist 2 No Process",
            'description' => 'This is the second checklist within the deals process'
        ]);

        DB::table('checklists')->insert([
            'id' => 3,
            'process_id' => 1,
            'process_order' => 1,
            'author_id' => 1,
            'name' => "Checklist 3 - Process 1, Order 1",
            'description' => 'Figuring out how to handle related parent and child items'
        ]);

        DB::table('checklists')->insert([
            'id' => 4,
            'process_id' => 1,
            'process_order' => 2,
            'author_id' => 1,
            'name' => "Checklist 4 - Process 1, Order 2",
            'description' => 'This is the second checklist within the deals process'
        ]);
    }
}
