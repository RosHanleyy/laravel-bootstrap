<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppointmentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('appointment')->delete();
        
        \DB::table('appointment')->insert(array (
            0 => 
            array (
                'id' => 1,
                'date_booked' => '2023-04-01',
                'date_recieved' => '2023-04-03',
                'repair_id' => 1,
                'customer_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'date_booked' => '2023-04-04',
                'date_recieved' => '2023-04-07',
                'repair_id' => 2,
                'customer_id' => 2,
            ),
        ));
        
        
    }
}