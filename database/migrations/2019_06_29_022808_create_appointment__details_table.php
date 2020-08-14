<?php

use App\Doctor;
use App\Medical_Appointment;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppointmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appointment__details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_doctor')->unsigned();
            $table->integer('id_appointment')->unsigned();
            $table->timestamps();

            $table->foreign('id_doctor')->references('id')->on('doctors');
            $table->foreign('id_appointment')->references('id')->on('medical_appointments');
        });
    }                                   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('appointment__details');
    }
}

