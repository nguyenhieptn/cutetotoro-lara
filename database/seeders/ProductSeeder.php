<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = [
            [
                'siteid' => '1',
                'dataset' => '1',
                'type' => 'mug',
                'code' => 'pro1',
                'label' => 'Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug',
                'url' => 'https://drive.google.com/uc?export=view&id=1Ii4kOkwDhzWr8Fhz2CSwCw43Yzs_GfPV',
                'config' => '[]',
                'start' => now(),
                'end' => now(),
                'scale' => 1,
                'rating' => 15.00,
                'ratings' => 14.00,
                'instock' => 0,
                'target' => '14.00',
                'status' => 1,
                'mtime' => now(),
                'ctime' => now(),
                'editor' => 'Admin@aimeos.laravel'
            ],
            [
                'siteid' => '2',
                'dataset' => '2',
                'type' => 'poster',
                'code' => 'pro2',
                'label' => 'Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug',
                'url' => 'https://drive.google.com/uc?export=view&id=1Ii4kOkwDhzWr8Fhz2CSwCw43Yzs_GfPV',
                'config' => '[]',
                'start' => now(),
                'end' => now(),
                'scale' => 2,
                'rating' => 15.00,
                'ratings' => 14.00,
                'instock' => 0,
                'target' => '14.00',
                'status' => 1,
                'mtime' => now(),
                'ctime' => now(),
                'editor' => 'Admin@aimeos.laravel'
            ],
            [
                'siteid' => '2',
                'dataset' => '2',
                'type' => 't-shirt',
                'code' => 'pro3',
                'label' => 'Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug',
                'url' => 'https://drive.google.com/uc?export=view&id=1Ii4kOkwDhzWr8Fhz2CSwCw43Yzs_GfPV',
                'config' => '[]',
                'start' => now(),
                'end' => now(),
                'scale' => 2,
                'rating' => 14.00,
                'ratings' => 14.00,
                'instock' => 0,
                'target' => '14.00',
                'status' => 1,
                'mtime' => now(),
                'ctime' => now(),
                'editor' => 'Admin@aimeos.laravel'
            ],
            [
                'siteid' => '2',
                'dataset' => '2',
                'type' => 'mug',
                'code' => 'pro4',
                'label' => 'Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug',
                'url' => 'https://drive.google.com/uc?export=view&id=1Ii4kOkwDhzWr8Fhz2CSwCw43Yzs_GfPV',
                'config' => '[]',
                'start' => now(),
                'end' => now(),
                'scale' => 2,
                'rating' => 15.00,
                'ratings' => 14.00,
                'instock' => 0,
                'target' => '14.00',
                'status' => 1,
                'mtime' => now(),
                'ctime' => now(),
                'editor' => 'Admin@aimeos.laravel'
            ],
            [
                'siteid' => '2',
                'dataset' => '2',
                'type' => 't-shirt',
                'code' => 'pro5',
                'label' => 'Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug',
                'url' => 'https://drive.google.com/uc?export=view&id=1Ii4kOkwDhzWr8Fhz2CSwCw43Yzs_GfPV',
                'config' => '[]',
                'start' => now(),
                'end' => now(),
                'scale' => 2,
                'rating' => 15.00,
                'ratings' => 14.00,
                'instock' => 0,
                'target' => '14.00',
                'status' => 1,
                'mtime' => now(),
                'ctime' => now(),
                'editor' => 'Admin@aimeos.laravel'
            ],
            [
                'siteid' => '2',
                'dataset' => '2',
                'type' => 'sticker',
                'code' => 'pro6',
                'label' => 'Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug',
                'url' => 'https://drive.google.com/uc?export=view&id=1Ii4kOkwDhzWr8Fhz2CSwCw43Yzs_GfPV',
                'config' => '[]',
                'start' => now(),
                'end' => now(),
                'scale' => 2,
                'rating' => 15.00,
                'ratings' => 14.00,
                'instock' => 0,
                'target' => '14.00',
                'status' => 1,
                'mtime' => now(),
                'ctime' => now(),
                'editor' => 'Admin@aimeos.laravel'
            ],
            [
                'siteid' => '2',
                'dataset' => '2',
                'type' => 't-shirt',
                'code' => 'pro7',
                'label' => 'Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug',
                'url' => 'https://drive.google.com/uc?export=view&id=1Ii4kOkwDhzWr8Fhz2CSwCw43Yzs_GfPV',
                'config' => '[]',
                'start' => now(),
                'end' => now(),
                'scale' => 2,
                'rating' => 15.00,
                'ratings' => 14.00,
                'instock' => 0,
                'target' => '14.00',
                'status' => 1,
                'mtime' => now(),
                'ctime' => now(),
                'editor' => 'Admin@aimeos.laravel'
            ]
        ];
        DB::table('mshop_product')->delete();
        DB::table('mshop_product')->insert($product);
    }
}
