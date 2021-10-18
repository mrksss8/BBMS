<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlottersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blotters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('person_to_complain_id')->unsigned()->index()->nullable();
            $table->foreign('person_to_complain_id')->references('id')->on('residence');
            $table->string('complainant_name');
            $table->string('Blotters_info');
            $table->string('case_type');
            $table->date('date_of_incident');
            $table->string('status');
            $table->string('agreement', 1500)->nullable();
            $table->string('bcp1')->nullable();
            $table->string('bcp2')->nullable();
            $table->string('bcp3')->nullable();
            $table->string('lbp1')->nullable();
            $table->string('lbp2')->nullable();
            $table->string('lbp3')->nullable();
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
        Schema::dropIfExists('blotters');
    }
}