<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HeroSlide;

class HeroSlideSeeder extends Seeder
{
    public function run()
    {
        HeroSlide::insert([
            [
                'title' => 'Slide 1 Title',
                'subtitle' => 'Subtitle for slide 1',
                'button_text' => 'Learn More',
                'button_link' => '/about',
                'image' => 'uploads/slide1.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Slide 2 Title',
                'subtitle' => 'Subtitle for slide 2',
                'button_text' => 'Shop Now',
                'button_link' => '/shop',
                'image' => 'uploads/slide2.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Slide 3 Title',
                'subtitle' => 'Subtitle for slide 3',
                'button_text' => 'Contact Us',
                'button_link' => '/contact',
                'image' => 'uploads/slide3.jpg',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
