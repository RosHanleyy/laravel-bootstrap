<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImageTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('Image')->delete();
        
        \DB::table('Image')->insert(array (
            0 => 
            array (
                'id' => 1,
                'image' => '/public/images/iPhone_SE.jpg',
                'brand' => 'Apple',
            ),
            1 => 
            array (
                'id' => 2,
                'image' => '/public/images/Google_Pixel.jpg',
                'brand' => 'Google',
            ),
            2 => 
            array (
                'id' => 3,
                'image' => '/public/images/ipad.jpg',
                'brand' => 'Apple',
            ),
            3 => 
            array (
                'id' => 4,
                'image' => '/public/images/HP3.jpg',
                'brand' => 'HP',
            ),
            4 => 
            array (
                'id' => 5,
                'image' => '/public/images/Mac.jpg',
                'brand' => 'Apple',
            ),
        ));
        
        
    }
}