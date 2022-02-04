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
            'workflow_id' => 1,
            'sort_order' => 1,
            'author_id' => 1,
            'name' => "Organization"
        ]);

        DB::table('checklists')->insert([
            'id' => 2,
            'workflow_id' => 1,
            'sort_order' => 2,
            'author_id' => 1,
            'name' => "Financial Items"
        ]);

        DB::table('checklists')->insert([
            'id' => 3,
            'workflow_id' => 1,
            'sort_order' => 3,
            'author_id' => 1,
            'name' => "Physical Assets"
        ]);

        DB::table('checklists')->insert([
            'id' => 4,
            'workflow_id' => 1,
            'sort_order' => 4,
            'author_id' => 1,
            'name' => "Real Estate"
        ]);

    }
}
