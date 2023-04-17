<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RepairDescriptionTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Repair_Description')->delete();
        
        \DB::table('Repair_Description')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Cracked Display',
                'description' => 'The device was dropped and the display cracked, ensure to check for any further damage internally.',
                'device_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Battery Life',
                'description' => 'The device is draining it\'s battery life quickly, unlikely that there is further damage.',
                'device_id' => 2,
            ),
        ));
        
        
    }
}