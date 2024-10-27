<?php

namespace Database\Seeders;

use App\Models\HomeConfiguration;
use Illuminate\Database\Seeder;

class HomeConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('home_configurations')->truncate();
        HomeConfiguration::create([
            'bg_image'=> 'uploads/Screenshot from 2024-10-19 09-35-15.png',
            'about_image' => 'uploads/Screenshot from 2024-10-20 11-33-57.png',
            'about_title' => 'About Love Value Studio',
            'about_description' => 'Welcome to Love Value Studio, where we turn your moments
                                        into timeless memories. We are passionate about capturing the beauty,
                                        emotions, and stories behind every event. Whether it’s through the lens of a camera or
                                        the flow of a live feed, our goal is to provide you
                                        with high-quality visuals that showcase every detail of your special moments.
                                        With a dedicated team of creative professionals and state-of-the-art equipment,
                                        we’re here to make sure that your memories are preserved in the most stunning way possible.',
            'location' => 'Kone Ta La Paung
                            Mingalardon
                            Yangon',
            'phone' => '09990909',
            'email' => 'lovevalue@gmail.com'
        ]);
    }
}
