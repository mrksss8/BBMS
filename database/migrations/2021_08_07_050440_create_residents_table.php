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
            $table->string('res_num', 32)->nullable();
            $table->string('last_name', 32);
            $table->string('first_name', 32);
            $table->string('middle_name', 32)->nullable();
            $table->string('suffix_name', 32)->nullable();
            $table->string('gender', 32);
            $table->date('birthday');
            $table->string('birthplace', 32)->nullable();
            $table->string('civil_status', 32);
            

            $table->string('house_number', 32)->nullable();
            $table->string('purok', 32);
            $table->string('street', 32);

            $table->string('occupation', 32);
            $table->string('student', 32);
            $table->string('type_of_house', 32);

            $table->string('pwd', 32);
            $table->string('membership_prog', 32);

            $table->string('image', 64)->nullable();

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
