<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecklistItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklist_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('checklist_id'); //which checklist this item belongs to
            $table->unsignedBigInteger('parent_item_id')->nullable(); //which checklist this item belongs to
            $table->enum("required_parent_status",["Completed","Active"])->nullable();
            $table->enum("activated_parent_status", ["Completed","Active"])->nullable();
            $table->string("category")->nullable(); //more or less a tag
            $table->text("description");
            $table->integer("sort_order")->default(0);
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
        Schema::dropIfExists('checklist_items');
    }
}
