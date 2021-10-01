<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecklistItemsLinkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist_items_link', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("parent_id"); // query by this to get list of items that are enabled upon completion
            $table->unsignedBigInteger("child_id"); // query by this to find all the parent items that need to be completed
            $table->boolean("required")->default(true);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklist_items_link');
    }
}
