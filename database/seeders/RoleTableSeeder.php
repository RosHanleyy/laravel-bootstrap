<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Role')->delete();
        
        \DB::table('Role')->insert(array (
            0 => 
            array (
                'id' => 1,
                'position' => 'Manager',
            ),
            1 => 
            array (
                'id' => 2,
                'position' => 'Technician',
            ),
            2 => 
            array (
                'id' => 3,
                'position' => 'Communications',
            ),
        ));
        
        
    }
}