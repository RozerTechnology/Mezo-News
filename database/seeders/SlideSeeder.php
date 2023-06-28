<?php

namespace Database\Seeders;

use App\Models\Slide;
use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $slides = [
            [
                'title' => 'Meet * Team!',
                'subtitle' => '/creative * one page template.',
                'description' => 'We are a team of professionals',
                'image' => 'slide-1.jpg'
             ],
             [
                'title' => 'Meet * Brandi!',
                'subtitle' => '/creative * one page template.',
                'description' => 'We are a team of professionals',
                'image' => 'slide-2.jpg'
             ],
             [
                'title' => 'Meet * Team!',
                'subtitle' => '/creative * one page template.',
                'description' => 'We are a team of professionals',
                'image' => 'slide-3.jpg'
             ],
            ];

        foreach ($slides as $slide) {

            Slide::create($slide);

        }//end of for each
       
    }
}
