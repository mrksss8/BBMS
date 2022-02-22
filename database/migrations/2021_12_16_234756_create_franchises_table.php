<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFranchisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchises', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('franchisee_id');
            $table->foreign('franchisee_id')->references('id')->on('residents');
            $table->string('franchise_number', 32);
            $table->string('motor_number', 32);
            $table->string('chasis_number', 32);
            $table->string('plate_number', 32);
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
        Schema::dropIfExists('franchises');
    }
}
