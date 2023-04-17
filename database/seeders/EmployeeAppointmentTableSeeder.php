<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeAppointmentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Employee_Appointment')->delete();
        
        \DB::table('Employee_Appointment')->insert(array (
            0 => 
            array (
                'id' => 1,
                'employee_id' => 2,
                'appointment_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'employee_id' => 2,
                'appointment_id' => 2,
            ),
        ));
        
        
    }
}