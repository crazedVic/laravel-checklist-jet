<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firm_checklists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("checklist_id");
            $table->unsignedBigInteger("checklistof_id")->nullable();
            $table->string("checklistof_type")->nullable();
            $table->unsignedBigInteger("user_id")->nullable();
            $table->string("frequency")->default('None');
            $table->integer("day")->default(0);
            $table->boolean('current')->default(true);
            $table->string("status")->default('Pending');//Submitted,Accepted
            $table->string("name");
            $table->text("description")->nullable();
            $table->string("department")->nullable();
            $table->timestamp('reminder_at')->nullable();
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
        Schema::dropIfExists('firm_checklists');
    }
}
