<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('services')->truncate();

        $services = [
            [
                'title' => 'Live Service',
                'short_description' => 'With our Live Service, experience real-time streaming of your events, making it easy for loved ...', 
                'long_description' => 'With our Live Service, experience real-time streaming of your events, making it easy for loved ones near
                 and far to join in your celebrations. We handle every technical aspect, providing seamless, high-definition streaming that
                  captures every word, smile, and laugh. Whether it’s a corporate event or a personal celebration, we bring your event to life
                   for everyone to enjoy. ', 
                'thumb' => 'uploads/Screenshot from 2024-10-20 11-33-57.png'
            ],
            [
                'title' => 'Video Service',
                'short_description' => 'Our Video Service offers professionally crafted videos tailored to highlight each chapter...', 
                'long_description' => 'Our Video Service offers professionally crafted videos tailored to highlight each chapter of your event.
                    We bring a cinematic approach to every project, blending creative storytelling with crisp visuals. From capturing the energy of
                    the day to crafting a narrative that reflects the experience, our team is here to ensure your video is as vivid as your memories.', 
                'thumb' => 'uploads/Screenshot from 2024-10-21 09-43-07.png'
            ],
            [
                'title' => 'Photo Service',
                'short_description' => 'Our Photo Service is designed to capture the essence of each moment. From portraits to events, we take pride...', 
                'long_description' => 'Our Photo Service is designed to capture the essence of each moment. From portraits to events, we take pride in 
                creating images that tell a story, preserving each expression, and capturing the unique beauty of your surroundings. With a keen eye 
                for detail and a commitment to quality, our team ensures that every photograph reflects the authenticity of the moment.', 
                'thumb' => 'uploads/Screenshot from 2024-10-21 09-44-12.png'
            ],
        ];

        foreach($services as $service) {
            Service::create($service);
        }
    }
}
