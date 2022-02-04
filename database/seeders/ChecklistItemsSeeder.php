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
            'itemof_id' => 3,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Task Deals 1-1A"
        ]);

        $item_id ++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 3,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Task Deals 1-1B"
        ]);

        $item_id ++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 3,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Task Deals 1-1C"
        ]);

        $item_id ++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 3,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Task Deals 1-1D"
        ]);

        $item_id ++;
        // second checklist in workflow 1
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 4,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Task Deals 2-1A"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 4,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Task Deals 2-1B"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 4,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Task Deals 2-1C"
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 4,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Task Deals 2-1D"
        ]);

        /*
        1A, 1B, 1C, 1D must be completed before 2A can be enabled.
         */
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 3,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Task 2A"
        ]);

        /* dependencies */
        DB::table('item_dependencies')->insert([
            'dependencyof_id' => 1,
            'dependencyof_item' => "App\\Models\\ChecklistItem",
            'item_id' => $item_id,
            'required' => 'Completed'
        ]);
        DB::table('item_dependencies')->insert([
            'dependencyof_id' => 2,
            'dependencyof_item' => "App\\Models\\ChecklistItem",
            'item_id' => $item_id,
            'required' => 'Completed'
        ]);
        DB::table('item_dependencies')->insert([
            'dependencyof_id' => 3,
            'dependencyof_item' => "App\\Models\\ChecklistItem",
            'item_id' => $item_id,
            'required' => 'None'
        ]);
        DB::table('item_dependencies')->insert([
            'dependencyof_id' => 4,
            'dependencyof_item' => "App\\Models\\ChecklistItem",
            'item_id' => $item_id,
            'required' => 'Completed'
        ]);

        $item_id++;
        /* items depending on completion of 2A */
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 3,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Task 3A"
        ]);
        DB::table('item_dependencies')->insert([
            'dependencyof_id' => 5,
            'dependencyof_item' => "App\\Models\\ChecklistItem",
            'item_id' => $item_id
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 3,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Task 3B"
        ]);
        DB::table('item_dependencies')->insert([
            'dependencyof_id' => 5,
            'dependencyof_item' => "App\\Models\\ChecklistItem",
            'item_id' => $item_id
        ]);

        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 3,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'name' => "Task 3C"
        ]);
        DB::table('item_dependencies')->insert([
            'dependencyof_id' => 5,
            'dependencyof_item' => "App\\Models\\ChecklistItem",
            'item_id' => $item_id
        ]);
        DB::table('item_dependencies')->insert([
            'dependencyof_id' => 5,
            'dependencyof_item' => "App\\Models\\ChecklistItem",
            'item_id' => $item_id
        ]);

        $item_id++;
        // remaining seeded items
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Organizational chart of the company indicating the direct and indirect holding of the shares in the share capital of the company.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('item_dependencies')->insert([
            'dependencyof_id' => 1,
            'dependencyof_item' => "App\\Models\\Checklist",
            'item_id' => $item_id,
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Minute Book (including any written resolution in lieu of meeting) and other corporate records, as well as the statutes and By-Laws of the company, including any amendment to the statutes and By-Laws.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Any agreement between the shareholders of the company including any amendment to the latter.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "List of outstanding options or other rights to purchase shares in the company.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "List of trade names of the company.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "List and addresses of the company’s firm places.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "List of the company’s subsidiaries.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Copy of any notice of default received by the company or by one of its subsidiaries from any authority relatively to their respective activities.
",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Licenses, authorizations and permits required by public authorities (including municipal) for the operation of the company’ firm.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Accreditation certificates, if applicable.
",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Firm licences, regulatory approvals or registrations, if applicable.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Compliance certificates, if applicable.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Documents relating to patents, license agreements, copyrights, trade-marks, industrial designs, processes secrets, know-how and other intellectual property rights owned or used by the company.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Description of any action, claim or other proceeding of any nature pertaining to intellectual property owned or used by the company.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Written evidence to the effect that, in connection with technology attached to the firm plan, the company owns, free of any lien or other charge, all rights of intellectual property or, where appropriate, an exclusive license.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "List of the escrow and or other private information that is specific to the companys intellectual properties",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Agreements with third parties in relation to the realization of the firm plan.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Loan agreements, safety, security and other collateral agreements to the financing of the company (including, as appropriate, a list of liens and other charges affecting any property of the company).",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Contracts with customers or suppliers signed and under negotiation.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 1,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Legal",
            'name' => "Non-competition agreements or all other contracts restricting the rights of the company.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Finance",
            'name' => "P&L Statement",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Finance",
            'name' => "Income Statement",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Finance",
            'name' => "Balance Sheet",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        $item_id++;
        DB::table('checklist_items')->insert([
            'id' => $item_id,
            'itemof_id' => 2,
            'itemof_type' => "App\\Models\\Checklist",
            'sort_order' => $i++,
            'department' => "Finance",
            'name' => "General Ledger",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
