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
        $i = 0;
        $item_id = 1;

        // figuring out checklist item interdependencies
        // first checklist in worfklow 1
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Articles of Incorporation"
        ]);

        $item_id ++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Company Bylaws"
        ]);

        $item_id ++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' =>1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Organization Charts"
        ]);

        $item_id ++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Capital Structure"
        ]);

        $item_id ++;
        // second checklist in workflow 1
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Equity Positions"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Option Holders"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Warrant Holders"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Voting Trusts"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Other financial agreements"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Certificate of Good Standing from Province in which company is incorporated"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "List of regions in which the company is authorized to do business"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "List of regions in which the company has employees, contract relationships, leases facilities, or transacts business"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "List of any names (and documentation) under which the company may operate"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Financial Provincements for previous three years"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Company/Auditor correspondence from previous three years"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Credit report"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Capital budget"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Strategic planning documents"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Financial schedules"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Contingent liabilities"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Indebtedness"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Inventory"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Accounts receivable"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Accounts payable"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Depreciation and amortization procedures and accounting methods in previous three years"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Financial model containing revenue, fixed and variable expenses, and gross margins"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Analysis of internal control procedures"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 3,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Listing of fixed assets and their respective locations"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 3,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Equipment leases"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 3,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Transactions relating to major capital equipment in previous three years"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 4,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Detailed listing of business locations"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 4,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Copies of any special location leases"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 4,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Real Estate Leases"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 4,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Mortgages"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 4,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Data Center Leases"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 4,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Titles"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 4,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Surveys"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 4,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Zoning approvals"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 4,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Variances"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 4,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Use permits"
        ]);


        /* dependencies */
//        DB::table('item_dependencies')->insert([
//            'dependencyof_id' => 1,
//            'dependencyof_type' => "App\\Models\\ChecklistItem",
//            'item_id' => $item_id,
//            'required' => 'Submitted'
//        ]);
//        DB::table('item_dependencies')->insert([
//            'dependencyof_id' => 2,
//            'dependencyof_type' => "App\\Models\\ChecklistItem",
//            'item_id' => $item_id,
//            'required' => 'Submitted'
//        ]);
//        DB::table('item_dependencies')->insert([
//            'dependencyof_id' => 3,
//            'dependencyof_type' => "App\\Models\\ChecklistItem",
//            'item_id' => $item_id,
//            'required' => 'Approved'
//        ]);
//        DB::table('item_dependencies')->insert([
//            'dependencyof_id' => 4,
//            'dependencyof_type' => "App\\Models\\ChecklistItem",
//            'item_id' => $item_id,
//            'required' => 'Submitted'
//        ]);


    }
}
