<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => 'Makrout Louz',
                'image' => 'mekrout-louz.png', // Just store filename
                'priceamande' => 160,
                'pricecacahuete'=>90,
                'type'=>'traditionnel'
            ],
            [
                'name' => 'Keikat (model blanc)',
                'image' => 'k3ik3at-white.png',
                'priceamande' => 160,
                'pricecacahuete'=>90,
                'type'=>'traditionnel'
            ],
            [
                'name' => 'Hlilat',
                'image' => 'tcharak-3ryan.png',
                'priceamande' => 140,
                'pricecacahuete'=>80,
                'type'=>'traditionnel'
            ],
            [
                'name' => 'Keikat (model jaune)',
                'image' => 'k3ik3at-yellow.png',
                'priceamande' => 155,
                'pricecacahuete'=>100,
                'type'=>'traditionnel'
            ],
                [
                'name' => 'Dziriette',
                'image' => 'dziriyat-lmoul.png',
                'priceamande' => 170,
                'pricecacahuete'=>100,
                'type'=>'traditionnel'
            ],
            [
                'name' => 'Keikat bébé (fille)',
                'image' => 'k3i3at-bebe.jpg',
                'priceamande' => 150,
                'pricecacahuete'=>100,
                'type'=>'traditionnel'
            ],
            [
                'name' => 'Baklwawa sniwa',
                'image' => 'baklawa.png',
                'priceamande' => 10000,
                'pricecacahuete'=>5000,
                'type'=>'traditionnel'
            ],
            
            [
                'name' => 'Mchewek',
                'image' => 'mchewek.png',
                'priceamande' => 180,
                'pricecacahuete' => 180,
                'type'=>'traditionnel'
            ],
            [
                'name' => 'Mkhabez',
                'image' => 'mkhabez.png',
                'priceamande' => 160,
                'pricecacahuete'=>100,
                'type'=>'traditionnel'
            ],
            [
                'name' => 'mhancha',
                'image' => 'mhancha.png',
                'priceamande' => 150,
                'pricecacahuete'=>90,
                'type'=>'traditionnel'
            ],
            [
                'name' => 'Tcharak mseker',
                'image' => 'tcharak.png',
                'priceamande' => 140,
                'pricecacahuete'=>85,
                'type'=>'traditionnel'
            ],
            [
                'name' => 'Barquettes a la noix de coco',
                'image' => 'barquet.png',
                'priceamande'=>75,
                'pricecacahuete'=>75,
                'type'=>'modern'
            ],
            [
                'name' => 'Sablé féréro',
                'image' => 'ferero.png',
                'pricecacahuete'=>75,
                'priceamande'=>75,
                'type'=>'modern'
            ],
            [
                'name' => 'Hlilat aux chocolat',
                'image' => 'hlilat.png',
                'pricecacahuete'=>70,
                'priceamande'=>70,
                'type'=>'modern'
            ],
            [
                'name' => 'Sablé bébé',
                'image' => 'sable-bebe.png',
                'priceamande'=>75,
                'pricecacahuete'=>75,
                'type'=>'modern'
            ],
            [
                'name' => 'Pyramids',
                'image' => 'pyramids.png',
                'priceamande'=>120,
                'pricecacahuete'=>120,
                'type'=>'modern'
            ],
            [
                'name' => 'Tartelettes au fruits',
                'image' => 'tartelette.png',
                'priceamande'=>80,
                'pricecacahuete'=>80,
                'type'=>'modern'
            ],
            [
                'name' => 'Sablé cœur',
                'image' => 'sbale-coeur.png',
                'priceamande'=>75,
                'pricecacahuete'=>75,
                'type'=>'modern'
            ],
        ];

        Product::insert($products); // Inserts all at once
    }
};
