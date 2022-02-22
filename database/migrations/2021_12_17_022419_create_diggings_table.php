<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiggingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diggings', function (Blueprint $table) {
            $table->id();
            $table->string('digging_number', 32);
            $table->string('name', 32);
            $table->string('address', 64);
            $table->string('digging_location', 64);
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
        Schema::dropIfExists('diggings');
    }
}
