<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('doctors', 'Doctor\DoctorController', ['except' => ['create', 'edit']]);

Route::resource('appointments', 'Appointment\AppointmentController', ['only' => ['index', 'show']]);

Route::resource('appointment_details', 'Appointment_Detail\Appointment_DetailController');
