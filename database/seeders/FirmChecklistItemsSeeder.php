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
            'firm_checklist_id' => 3,
            'checklist_item_id' => 1,
            "status" => "Active",
            'description' => "Firm Task 1A"
        ]);

        DB::table('firm_checklist_items')->insert([
            'firm_checklist_id' => 3,
            'checklist_item_id' => 2,
            "status" => "Active",
            'description' => "Firm Task 1B"
        ]);
        DB::table('firm_checklist_items')->insert([
            'firm_checklist_id' => 3,
            'checklist_item_id' => 3,
            "status" => "Active",
            'description' => "Firm Task 1C"
        ]);
        DB::table('firm_checklist_items')->insert([
            'firm_checklist_id' => 3,
            'checklist_item_id' => 4,
            "status" => "Active",
            'description' => "Firm Task 1D"
        ]);
        DB::table('firm_checklist_items')->insert([
            'firm_checklist_id' => 3,
            'checklist_item_id' => 5,
            "status" => "Pending",
            'description' => "Firm Task 2A"
        ]);
        DB::table('firm_checklist_items')->insert([
            'firm_checklist_id' => 3,
            'checklist_item_id' => 6,
            "status" => "Pending",
            'description' => "Firm Task 3A"
        ]);
        DB::table('firm_checklist_items')->insert([
            'firm_checklist_id' => 3,
            'checklist_item_id' => 7,
            "status" => "Pending",
            'description' => "Firm Task 3B"
        ]);
        DB::table('firm_checklist_items')->insert([
            'firm_checklist_id' => 3,
            'checklist_item_id' => 8,
            "status" => "Pending",
            'description' => "Firm Task 3C"
        ]);


        // regular seeded data
        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 9,
            'category' => "Legal",
            "status" => "Completed",
            'description' => "Organizational chart of the company indicating the direct and indirect holding of the shares in the share capital of the company.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 10,
            'category' => "Legal",
            'description' => "Minute Book (including any written resolution in lieu of meeting) and other corporate records, as well as the statutes and By-Laws of the company, including any amendment to the statutes and By-Laws.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 11,
            'category' => "Legal",
            "status" => "Completed",
            'description' => "Any agreement between the shareholders of the company including any amendment to the latter.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 12,
            'category' => "Legal",
            'description' => "List of outstanding options or other rights to purchase shares in the company.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 13,
            'category' => "Legal",
            'description' => "List of trade names of the company.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 14,
            'category' => "Legal",
            'description' => "List and addresses of the company’s firm places.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 14,
            'category' => "Legal",
            "status" => "Completed",
            'description' => "List of the company’s subsidiaries.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 15,
            'category' => "Legal",
            'description' => "Copy of any notice of default received by the company or by one of its subsidiaries from any authority relatively to their respective activities.
",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 16,
            'category' => "Legal",
            'description' => "Licenses, authorizations and permits required by public authorities (including municipal) for the operation of the company’ firm.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 17,
            'category' => "Legal",
            "status" => "Completed",
            'description' => "Accreditation certificates, if applicable.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 18,
            'category' => "Legal",
            'description' => "Firm licences, regulatory approvals or registrations, if applicable.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 19,
            'category' => "Legal",
            'description' => "Compliance certificates, if applicable.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 20,
            'category' => "Intellectual Property",
            "status" => "Completed",
            'description' => "Documents relating to patents, license agreements, copyrights, trade-marks, industrial designs, processes secrets, know-how and other intellectual property rights owned or used by the company.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 21,
            'category' => "Intellectual Property",
            "status" => "Completed",
            'description' => "Description of any action, claim or other proceeding of any nature pertaining to intellectual property owned or used by the company.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 22,
            'category' => "Intellectual Property",
            "status" => "Completed",
            'description' => "Written evidence to the effect that, in connection with technology attached to the firm plan, the company owns, free of any lien or other charge, all rights of intellectual property or, where appropriate, an exclusive license.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 23,
            'category' => "Intellectual Property",
            'description' => "List of the escrow and or other private information that is specific to the companys intellectual properties",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 24,
            'category' => "Material Contract Documentation",
            'description' => "Agreements with third parties in relation to the realization of the firm plan.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 25,
            'category' => "Material Contract Documentation",
            'description' => "Loan agreements, safety, security and other collateral agreements to the financing of the company (including, as appropriate, a list of liens and other charges affecting any property of the company).",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 26,
            'category' => "Material Contract Documentation",
            "status" => "Completed",
            'description' => "Contracts with customers or suppliers signed and under negotiation.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('firm_checklist_items')->insert([
           'firm_checklist_id' => 1,
            'checklist_item_id' => 27,
            'category' => "Material Contract Documentation",
            'description' => "Non-competition agreements or all other contracts restricting the rights of the company.",
            'created_at' => now(),
            'updated_at' => now(),
        ]);


        DB::table('firm_checklist_items')->insert([
            'firm_checklist_id' => 2,
            'checklist_item_id' => 28,
            'category' => "Finance",
            'description' => "P&L Statement",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('firm_checklist_items')->insert([
            'firm_checklist_id' => 2,
            'checklist_item_id' => 29,
            'category' => "Finance",
            'description' => "Income Statement",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('firm_checklist_items')->insert([
            'firm_checklist_id' => 2,
            'checklist_item_id' => 30,
            'category' => "Finance",
            'description' => "Balance Sheet",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('firm_checklist_items')->insert([
            'firm_checklist_id' => 2,
            'checklist_item_id' => 31,
            'category' => "Finance",
            'description' => "General Ledger",
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
