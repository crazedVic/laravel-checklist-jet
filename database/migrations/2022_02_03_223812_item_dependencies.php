<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ItemDependencies extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_dependencies', function (Blueprint $table) {
            $table->unsignedBigInteger("item_id"); // childId
            $table->unsignedBigInteger("dependencyof_id"); // parentId
            $table->string("dependencyof_type", 128); // a checklist time belong to a checklist or another checklistitem
            $table->string("required", 64); // 'Submitted', 'Approved'
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_dependencies');
    }
}
