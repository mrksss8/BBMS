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
            $table->id();
            
            $table->string('case_number');
            $table->string('complainant_name');
            $table->string('complained_resident')->nullable();  
            $table->string('Blotters_info');
            $table->string('case_type');
            $table->date('date_of_incident');
            $table->string('status');
            $table->string('agreement', 1500)->nullable();

            $table->string('bcp1')->nullable();
            $table->string('bcp1_note')->nullable();
            $table->dateTime('bcp1_date')->nullable();

            $table->string('bcp2')->nullable();
            $table->string('bcp2_note')->nullable();
            $table->dateTime('bcp2_date')->nullable();

            $table->string('bcp3')->nullable();
            $table->string('bcp3_note')->nullable();
            $table->dateTime('bcp3_date')->nullable();

            $table->string('lbp1')->nullable();
            $table->string('lbp1_note')->nullable();
            $table->dateTime('lbp1_date')->nullable();

            $table->string('lbp2')->nullable();
            $table->string('lbp2_note')->nullable();
            $table->dateTime('lbp2_date')->nullable();

            $table->string('lbp3')->nullable();
            $table->string('lbp3_note')->nullable();
            $table->dateTime('lbp3_date')->nullable();
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
