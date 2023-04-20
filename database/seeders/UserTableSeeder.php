<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('User')->delete();
        
        \DB::table('User')->insert(array (
            0 => 
            array (
                'id' => 1,
                'first_name' => 'Lois',
                'second_name' => 'Robson',
                'phone' => 875382275,
                'email' => 'loisrobsone@gmail.com',
                'password'=> '12345678',
                'role_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'first_name' => 'Deniss',
                'second_name' => 'Danilovs',
                'phone' => 8912334356,
                'email' => 'denissdanilovs@gmail.com',
                'password' => '12345678',
                'role_id' => 2,
            ),
        ));
        
        
    }
}