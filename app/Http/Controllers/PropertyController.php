<?php

namespace App\Http\Controllers;

class PropertyController extends Controller
{
    public function show($slug)
    {
        $properties = [
            'villa-puncak-indah' => [
                'title' => 'Villa Puncak Indah',
                'price' => 'Rp 2.000.000/malam',
                'description' => 'Villa mewah di Puncak dengan pemandangan pegunungan yang asri.',
                'image' => 'https://images.unsplash.com/photo-1568605114967-8130f3a36994',
                'location' => 'Puncak, Jawa Barat',
                'type' => 'Villa'
            ],
            'tanah-strategis-jogja' => [
                'title' => 'Tanah Strategis Jogja',
                'price' => 'Rp 850.000.000',
                'description' => 'Tanah luas di Jogja dekat pusat kota dan akses jalan utama.',
                'image' => 'https://images.unsplash.com/photo-1505691938895-1758d7feb511',
                'location' => 'Yogyakarta',
                'type' => 'Tanah'
            ],
            'villa-bali-view' => [
                'title' => 'Villa Bali View',
                'price' => 'Rp 3.500.000/malam',
                'description' => 'Villa eksklusif di Bali dengan view pantai tropis.',
                'image' => 'https://images.unsplash.com/photo-1580587771525-78b9dba3b914',
                'location' => 'Bali',
                'type' => 'Villa'
            ],
        ];

        if (!array_key_exists($slug, $properties)) {
            abort(404);
        }

        return view('property.show', [
            'property' => $properties[$slug]
        ]);
    }
}
