<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('firms', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("team_id")->index();
            $table->string('name')->index();
            $table->string("status")->default('New'); //New, Active, Merged
            $table->text('description')->nullable();
            $table->string('city')->nullable();
            $table->string('province')->nullable();
            $table->string('country')->nullable();
            $table->string('company_website')->nullable();
            $table->boolean('company_website_verified')->nullable();
            $table->string('company_linkedin')->nullable();
            $table->boolean('company_linkedin_verified')->default(false);
            $table->string('company_phone')->nullable();
            $table->string('company_phone_secondary')->nullable();
            $table->string('employee_size')->nullable();
            $table->integer('location_count')->nullable();
            $table->string('year_founded')->nullable();
            $table->string('primary_sic')->nullable();
            $table->string('market_scope')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('firms');
    }
}
