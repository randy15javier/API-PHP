<?php

use App\Doctor;
use App\Appointment_Detail;
use App\Medical_Appointment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');

        Doctor::truncate();
        Medical_Appointment::truncate();
        Appointment_Detail::truncate();

        $cantidadDoctores = 100;
        $cantidadCitasMedicas = 100;
        $cantidadDetalleCitas = 100;

        factory(Doctor::class, $cantidadDoctores)->create();
        factory(Medical_Appointment::class, $cantidadCitasMedicas)->create();
        factory(Appointment_Detail::class, $cantidadDetalleCitas)->create();

    }
}
