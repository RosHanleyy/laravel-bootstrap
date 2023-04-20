<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DeviceTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Device')->delete();
        
        \DB::table('Device')->insert(array (
            0 => 
            array (
                'id' => 1,
                'model' => 'iPhone 14 Pro Max',
                'description' => 'Black, 128GB, E-SIM',
            ),
            1 => 
            array (
                'id' => 2,
                'model' => 'Samsung Galaxy S22 Ultra',
                'description' => 'Black, 256GB, E-SIM/Physical SIM',
            ),
        ));
        
        
    }
}