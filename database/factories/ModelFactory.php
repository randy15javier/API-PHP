<?php

use App\Doctor;
use App\Appointment_Detail;
use App\Medical_Appointment;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Doctor::class, function (Faker\Generator $faker) {
   
    return [
        'doctor_code' => $faker->numberBetween($min = 1, $max = 100),
        'name' => $faker->firstNameMale,
        'lastname' => $faker->lastName,
        'telephone' => $faker->phoneNumber,
        'email' => $faker->unique()->safeEmail,
    ];
});

$factory->define(Medical_Appointment::class, function (Faker\Generator $faker) {
   
    return [
        
        'date' => $faker->date,
        'time' => $faker->time,
        'status' => $faker->randomElement([Medical_Appointment::CITA_ATENDIDA, Medical_Appointment::CITA_NO_ATENDIDA]),
        'observation' => $faker->text($maxNbChars = 100),
        'price' => $faker->numberBetween($min = 100, $max = 1000),
        'patient' => $faker->name,
    ];
});

$factory->define(Appointment_Detail::class, function (Faker\Generator $faker) {
   
    return [
        
        'id_doctor' => $faker->numberBetween(1, 100),
        'id_appointment' => $faker->numberBetween(1, 100),
    ];
});