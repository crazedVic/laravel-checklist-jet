<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChecklistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('checklists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("workflow_id")->nullable();
            $table->integer("sort_order")->default(0);
            $table->unsignedBigInteger('author_id');
            $table->unsignedBigInteger('prerequisite_id')->nullable();// either no dependency, or depends on another task
            $table->unsignedBigInteger('parent_id')->nullable(); //or is the child of a task.
            $table->string("name");
            $table->text("description")->nullable();
            $table->string("department")->nullable();
            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));

            $table->foreign('author_id','fk_checklists_users_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('checklists');
    }
}
