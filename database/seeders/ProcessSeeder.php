<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProcessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('processes')->insert([
            'id' => 1,
            'name' => "Process One",
            'description' => 'The process surrounding the completion of a deal.'
        ]);

        DB::table('processes')->insert([
            'id' => 2,
            'name' => "Process Two",
            'description' => 'The process surrounding the completion of a deal.'
        ]);
    }
}
