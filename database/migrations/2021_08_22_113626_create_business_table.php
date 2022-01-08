<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('business', function (Blueprint $table) {
            $table->id();
            // $table->integer('business_owner_id')->unsigned()->index()->nullable();
            // $table->foreign('business_owner_id')->references('id')->on('residence');

            $table->unsignedBigInteger('business_owner_id')->nullable();
            $table->foreign('business_owner_id')->references('id')->on('residents')->nullable();
            $table->string('business_owner_not_resident')->nullable();
            $table->string('business_number');
            $table->string('business_name');
            $table->string('business_address');
            $table->string('business_type')->nullable();
            $table->date('regs_date');
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
        Schema::dropIfExists('business');
    }
}
