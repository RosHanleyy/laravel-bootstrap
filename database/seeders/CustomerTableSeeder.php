<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Customer')->delete();
        
        \DB::table('Customer')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Ros',
                'second_name' => 'Hanley',
                'contact_number' => '0856371482',
                'contact_email' => 'roshanley@gmail.com',
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Jacee',
                'second_name' => 'Decker',
                'contact_number' => '0850983456',
                'contact_email' => 'jaceedecker@gmail.com',
            ),
        ));
        
        
    }
}