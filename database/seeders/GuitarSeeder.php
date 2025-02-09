<?php

namespace Database\Seeders;

use App\Models\Guitar;
use Illuminate\Database\Seeder;

class GuitarSeeder extends Seeder
{
    public function run(): void
    {
        $guitars = [
            [
                'name' => 'Stratocaster Professional II',
                'brand' => 'Fender',
                'type' => 'Electric',
                'price' => 1499.99,
                'description' => 'The Fender Professional II Stratocaster features a deep "C" shaped neck profile, narrow-tall frets, and V-Mod II single-coil pickups for classic Strat tone.',
                'image_url' => '/images/guitars/strat-pro.jpg'
            ],
            [
                'name' => 'Les Paul Standard 60s',
                'brand' => 'Gibson',
                'type' => 'Electric',
                'price' => 2699.99,
                'description' => 'Featuring a solid mahogany body with maple top, Burstbucker pickups, and classic styling that revolutionized rock and roll.',
                'image_url' => '/images/guitars/les-paul.jpg'
            ],
            [
                'name' => 'D-28',
                'brand' => 'Martin',
                'type' => 'Acoustic',
                'price' => 3199.99,
                'description' => 'The Martin D-28 is the dreadnought by which all others are judged. Featuring East Indian rosewood back and sides, and a Sitka spruce top.',
                'image_url' => '/images/guitars/martin-d28.jpg'
            ],
            [
                'name' => 'Jazz Bass Professional II',
                'brand' => 'Fender',
                'type' => 'Bass',
                'price' => 1699.99,
                'description' => 'The Fender Professional II Jazz Bass features a slim "C" shaped neck profile and V-Mod II Jazz Bass single-coil pickups for classic tone.',
                'image_url' => '/images/guitars/jazz-bass.jpg'
            ],
            [
                'name' => 'Taylor 814ce',
                'brand' => 'Taylor',
                'type' => 'Acoustic',
                'price' => 3499.99,
                'description' => 'Features Indian rosewood back and sides, Sitka spruce top, and Expression System 2 electronics for pristine amplified tone.',
                'image_url' => '/images/guitars/taylor-814ce.jpg'
            ],
            [
                'name' => 'Ibanez RG550',
                'brand' => 'Ibanez',
                'type' => 'Electric',
                'price' => 999.99,
                'description' => 'The RG550 features a Super Wizard neck, Edge tremolo bridge, and V7/S1/V8 pickups for versatile high-gain performance.',
                'image_url' => '/images/guitars/ibanez-rg.jpg'
            ],
            [
                'name' => 'StingRay Special',
                'brand' => 'Music Man',
                'type' => 'Bass',
                'price' => 2199.99,
                'description' => 'Features an ash body, roasted maple neck, and powerful humbucker pickup with 3-band EQ for legendary StingRay tone.',
                'image_url' => '/images/guitars/stingray.jpg'
            ],
            [
                'name' => 'American Acoustasonic Telecaster',
                'brand' => 'Fender',
                'type' => 'Hybrid',
                'price' => 1999.99,
                'description' => 'Revolutionary hybrid acoustic-electric featuring the Acoustasonic Noiseless pickup and Fishman-designed Acoustic Engine.',
                'image_url' => '/images/guitars/acoustasonic.jpg'
            ],
            [
                'name' => 'PRS Custom 24',
                'brand' => 'PRS',
                'type' => 'Electric',
                'price' => 3999.99,
                'description' => 'Features a maple top, mahogany back, 85/15 pickups, and a Pattern Regular neck for classic PRS playability and tone.',
                'image_url' => '/images/guitars/prs-custom.jpg'
            ],
            [
                'name' => 'Thunderbird',
                'brand' => 'Gibson',
                'type' => 'Bass',
                'price' => 2299.99,
                'description' => 'Classic reverse body styling with twin Thunderbird pickups for powerful, punchy bass tone that cuts through any mix.',
                'image_url' => '/images/guitars/thunderbird.jpg'
            ]
        ];

        foreach ($guitars as $guitar) {
            Guitar::create($guitar);
        }
    }
}