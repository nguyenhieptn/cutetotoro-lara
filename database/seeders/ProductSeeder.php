<?php

namespace Database\Seeders;

use Aimeos\MShop;
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
        $productManager = MShop::create(app('aimeos.context')->get(), 'product');
        $categoryManager = MShop::create(app('aimeos.context')->get(), 'catalog');
        $priceManager = MShop::create(app('aimeos.context')->get(), 'price');
        $products = [
            [
                'category'      => ['Mug'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/09/P5YHE5mAGkpXXf4q-scaled.jpeg'
                ]
            ],
            [
                'category'      => ['Mug'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/09/P5YHE5mAGkpXXf4q-scaled.jpeg'
                ]
            ],
            [
                'category'      => ['Mug'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/09/P5YHE5mAGkpXXf4q-scaled.jpeg'
                ]
            ],
            [
                'category'      => ['Mug'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/09/P5YHE5mAGkpXXf4q-scaled.jpeg'
                ]
            ],
            [
                'category'      => ['Mug'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/09/P5YHE5mAGkpXXf4q-scaled.jpeg'
                ]
            ],
            [
                'category'      => ['Poster'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/10/1601084507085.jpeg'
                ]
            ],
            [
                'category'      => ['Poster'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/10/1601084507085.jpeg'
                ]
            ],
            [
                'category'      => ['Poster'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/10/1601084507085.jpeg'
                ]
            ],
            [
                'category'      => ['Poster'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/10/1601084507085.jpeg'
                ]
            ],
            [
                'category'      => ['Poster'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/10/1601084507085.jpeg'
                ]
            ],
            [
                'category'      => ['Poster'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/10/1601084507085.jpeg'
                ]
            ],
            [
                'category'      => ['Bag'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/10/1601084507085.jpeg'
                ]
            ],
            [
                'category'      => ['Bag'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/10/1601084507085.jpeg'
                ]
            ],
            [
                'category'      => ['Bag'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/10/1601084507085.jpeg'
                ]
            ],
            [
                'category'      => ['Bag'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/10/1601084507085.jpeg'
                ]
            ],
            [
                'category'      => ['Bag'],
                'title'         => 'Spirited away Soot Sprite Character Mug, with qoute: "Finish what you started Human" Based on Spirited away movie. Coffee Mug',
                'regular_price' => 15.99,
                'sale_price'    => 14,
                'images'        => [
                    'https://giran.nyc3.digitaloceanspaces.com/cutetotoro.com/2020/10/1601084507085.jpeg'
                ]
            ],
        ];
        foreach ($products as $product) {
            $data = [
                "product.type" => "select",
                "product.label" => $product['title'],
            ];
            $priceArray = [
                'price.value'=> $product['regular_price'],
                'price.currencyid' => 'USD',
                'price.costs' => $product['sale_price'],

            ];
        }

    }
}
