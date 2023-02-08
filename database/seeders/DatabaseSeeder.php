<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'siteid' => '1',
                'parentid' => 1,
                'level' => 0,
                'code' => 'mug',
                'label' => 'Mug',
                'url' => 'mug',
                'config' => '',
                'nleft' => 1,
                'nright' => 1,
                'target' => 'mug',
                'status' => 1,
                'mtime' => now(),
                'ctime' => now(),
                'editor' => 'Admin@aimeos.laravel'
            ],
            [
                'siteid' => '1',
                'parentid' => 1,
                'level' => 1,
                'code' => 'tshrit',
                'label' => 'T-shrit',
                'url' => 'tshrit',
                'config' => '',
                'nleft' => 1,
                'nright' => 1,
                'target' => 'tshrit',
                'status' => 1,
                'mtime' => now(),
                'ctime' => now(),
                'editor' => 'Admin@aimeos.laravel'
            ],
            [
                'siteid' => '1',
                'parentid' => 1,
                'level' => 1,
                'code' => 'sticker',
                'label' => 'Sticker',
                'url' => 'sticker',
                'config' => '',
                'nleft' => 1,
                'nright' => 1,
                'target' => 'sticker',
                'status' => 1,
                'mtime' => now(),
                'ctime' => now(),
                'editor' => 'Admin@aimeos.laravel'
            ],
            [
                'siteid' => '1',
                'parentid' => 1,
                'level' => 1,
                'code' => 'poster',
                'label' => 'Poster',
                'url' => 'poster',
                'config' => '',
                'nleft' => 1,
                'nright' => 1,
                'target' => 'poster',
                'status' => 1,
                'mtime' => now(),
                'ctime' => now(),
                'editor' => 'Admin@aimeos.laravel'
            ],
            [
                'siteid' => '1',
                'parentid' => 1,
                'level' => 1,
                'code' => 'bag',
                'label' => 'Bag',
                'url' => 'bag',
                'config' => '',
                'nleft' => 1,
                'nright' => 1,
                'target' => 'bag',
                'status' => 1,
                'mtime' => now(),
                'ctime' => now(),
                'editor' => 'Admin@aimeos.laravel'
            ],
            [
                'siteid' => '1',
                'parentid' => 1,
                'level' => 1,
                'code' => 'orther',
                'label' => 'Orther',
                'url' => 'orther',
                'config' => '',
                'nleft' => 1,
                'nright' => 1,
                'target' => 'orther',
                'status' => 1,
                'mtime' => now(),
                'ctime' => now(),
                'editor' => 'Admin@aimeos.laravel'
            ],
        ];
        DB::table('mshop_catalog')->insert($data);
    }
}
