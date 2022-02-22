<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFencingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fencings', function (Blueprint $table) {
            $table->id();
            $table->string('fencing_number', 32);
            $table->string('name', 32);
            $table->string('address', 64);
            $table->string('fencing_location', 64);
            $table->string('purpose', 32);
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
        Schema::dropIfExists('fencings');
    }
}
