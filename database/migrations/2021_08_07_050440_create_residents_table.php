<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residents', function (Blueprint $table) {
            $table->id();
            $table->string('res_num')->nullable();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();
            $table->string('gender');
            $table->date('birthday');
            $table->string('birthplace')->nullable();
            $table->string('civil_status');
            

            $table->integer('house_number')->nullable();
            $table->string('purok');
            $table->string('street');

            $table->string('occupation');
            $table->string('student');
            $table->string('type_of_house');

            $table->string('pwd');
            $table->string('membership_prog');

            $table->string('image')->nullable();

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
        Schema::dropIfExists('residents');
    }
}
