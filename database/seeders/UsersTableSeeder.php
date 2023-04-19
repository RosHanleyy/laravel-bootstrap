<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Users')->delete();
        
        \DB::table('Users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ros Hanley',
                'password' => '12345678',
                'email' => 'roshanley@gmail.com',
                'email_verified_at' => '2023-04-18 13:12:13',
                'remember_token' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}