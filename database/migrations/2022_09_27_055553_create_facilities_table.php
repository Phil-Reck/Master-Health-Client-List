<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facilities', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('mfl_code')->unique()->nullable();
            $table->string('county');
            $table->string('sub_county');
            $table->string('ward');
            $table->string('facility_type');
            $table->string('services');
            $table->string('operational_status');
            $table->date('date_established');
            $table->date('date_operational');
            $table->integer('no_of_doctors');
            $table->integer('no_of_nurses');
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
        Schema::dropIfExists('facilities');
    }
}
