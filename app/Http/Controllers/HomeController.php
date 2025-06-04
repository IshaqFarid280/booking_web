<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // For now, let's assume we have some dummy hotel data
        $hotels = [
            [
                'id' => 1,
                'name' => 'Hotel Alpha',
                'photos' => ['/images/hotel_alpha_1.jpg', '/images/hotel_alpha_2.jpg'],
                'description' => 'A beautiful hotel in the heart of the city.',
                'ratings' => 4.5,
                'room_size' => '25 sqm',
                'attach_bathroom' => true,
                'uploader_number' => '+1234567890'
            ],
            [
                'id' => 2,
                'name' => 'Mountain View Resort',
                'photos' => ['/images/mountain_view_1.jpg', '/images/mountain_view_2.jpg'],
                'description' => 'Enjoy breathtaking views and serene nature.',
                'ratings' => 4.8,
                'room_size' => '30 sqm',
                'attach_bathroom' => true,
                'uploader_number' => '+0987654321'
            ]
        ];
        return view('landing', compact('hotels'));
    }
} 