<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfficialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('officials', function (Blueprint $table) {

            $table->id();

            $table->string('brgy_official_name', 32);
            $table->string('brgy_official_position', 32);
            $table->string('brgy_official_role', 64)->nullable();
            $table->string('path', 64)->nullable();
            $table->string('img', 64)->nullable();
            $table->integer('batch_id')->length(10)->unsigned()->nullable();
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
        Schema::dropIfExists('officials');
    }
}
