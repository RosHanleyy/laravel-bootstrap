<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Employee')->delete();
        
        \DB::table('Employee')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Lois',
                'second_name' => 'Robson',
                'phone' => 875382275,
                'email' => 'loisrobsone@gmail.com',
                'role_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Deniss',
                'second_name' => 'Danilovs',
                'phone' => 8912334356,
                'email' => 'denissdanilovs@gmail.com',
                'role_id' => 2,
            ),
            2 => 
            array (
                'id' => 3,
                'first_name' => 'Philip',
                'second_name' => 'Hanley',
                'phone' => 867483753,
                'email' => 'philiphanley@gmail.com',
                'role_id' => 3,
            ),
        ));
        
        
    }
}