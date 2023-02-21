<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategorySeeder::class);
        $this->call(ProductSeeder::class);
//        $data = [
//            [
//                'category_name' => 'Mug',
//                'category_descript' => 'Mug product',
//                'url' => '/mug',
//                'meta_keywords' => 'mug',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'category_name' => 'T-shrit',
//                'category_descript' => 't-shrit product',
//                'url' => '/t-shrit',
//                'meta_keywords' => 't-shrit',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'category_name' => 'Sticker',
//                'category_descript' => 'sticker',
//                'url' => '/sticker',
//                'meta_keywords' => 'sticker',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'category_name' => 'Poster',
//                'category_descript' => 'poster.blade.php',
//                'url' => 'poster.blade.php',
//                'meta_keywords' => 'poster.blade.php',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'category_name' => 'Bag',
//                'category_descript' => 'bag',
//                'url' => '/bag',
//                'meta_keywords' => 'bag',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//            [
//                'category_name' => 'Orther',
//                'category_descript' => 'orther',
//                'url' => '/orther',
//                'meta_keywords' => 'orther',
//                'created_at' => now(),
//                'updated_at' => now(),
//            ],
//        ];
//        DB::table('category')->insert($data);
    }
}
