<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmChecklistItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firm_checklist_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('firm_checklist_id'); //which checklist this item belongs to
            $table->unsignedBigInteger('checklist_item_id'); //which checklistitem template this is spawned from
            $table->unsignedBigInteger("user_id")->nullable();
            $table->text("description");
            $table->string("category")->nullable();
            $table->integer("sort_order")->default(0);
            $table->string("status")->default('Pending');//Submitted,Accepted
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firm_checklist_items');
    }
}
