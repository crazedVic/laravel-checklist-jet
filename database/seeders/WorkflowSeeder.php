<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkflowSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workflows')->insert([
            'id' => 1,
            'name' => "Deals",
            'description' => 'The process surrounding the completion of a deal.'
        ]);
    }
}
