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
            // parent would be determined thorugh checklist items link, and morphable could parent to checklist or task.
            // but for v1 we would use just checklist.
            $table->id();
            $table->unsignedBigInteger("itemof_id");
            $table->string("itemof_type", 128);
            $table->integer("sort_order")->default(0);
            $table->string("name", 512);
            $table->text("description")->nullable();
            $table->string("department", 255)->nullable();
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
