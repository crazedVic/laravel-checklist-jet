<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Taskables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taskables', function (Blueprint $table) {
            $table->unsignedBigInteger("item_id"); // childId
            $table->unsignedBigInteger("taskableof_id"); // parentId
            $table->string("taskableof_item"); // a checklist time belong to a checklist or another checklistitem
            $table->integer("sort_order")->default(0);
            $table->string("required")->default("none");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
