<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BranchTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Branch')->delete();
        
        \DB::table('Branch')->insert(array (
            0 => 
            array (
                'id' => 1,
                'city' => 'Dublin',
                'address' => '123 Sample Road',
            ),
            1 => 
            array (
                'id' => 2,
                'city' => 'Cork',
                'address' => '321 Imaginary Land',
            ),
        ));
        
        
    }
}