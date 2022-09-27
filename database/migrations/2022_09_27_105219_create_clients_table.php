<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->string('dob') ;
            $table->string('gender')->nullable();
            $table->string('phone')->nullable();
            $table->string('id_no')->nullable();
            $table->string('UID_Number')->nullable() ;
            $table->string('nemis')->nullable();
            $table->string('county')->nullable();
            $table->string('sub_county')->nullable();
            $table->string('ward')->nullable();
            $table->unsignedBigInteger('facility_id')->nullable();
            
            $table->foreign('facility_id')->references('mfl_code')->on('facilities')->onDelete('cascade')->onUpdate('cascade');
            
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
        Schema::dropIfExists('clients');
    }
}
