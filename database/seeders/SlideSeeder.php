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
                'title' => 'With Mezo News you can get All world news in * one Space!',
                'subtitle' => '/creative * one page template.',
                'description' => 'We are a team of professionals',
                'image' => 'slide-1.jpg'
             ],
             [
                'title' => 'In Our App you can enjoy * the news Services!',
                'subtitle' => '/creative * one page template.',
                'description' => 'We are a team of professionals',
                'image' => 'slide-2.jpg'
             ],
             [
                'title' => 'Get Real time notification  * fast and Safty!',
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
