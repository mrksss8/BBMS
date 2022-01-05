<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeralcoClearancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meralco_clearances', function (Blueprint $table) {
            $table->id();
            $table->string('meralaco_clearance_number');
            $table->string('meralaco_clearance_applicant');
            $table->string('meralaco_clearance_building_type');
            $table->string('meralaco_clearance_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meralco_clearances');
    }
}
