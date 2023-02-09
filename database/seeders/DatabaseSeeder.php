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
        
        $data = [
            [
                'siteid' => '1',
                'parentid' => 1,
                'level' => 1,
                'code' => 'tshrit',
                'label' => 'T-shrit',
                'url' => 'tshrit',
                'config' => '{}',
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
                'config' => '{}',
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
                'config' => '{}',
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
                'config' => '{}',
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
                'config' => '{}',
                'nleft' => 1,
                'nright' => 1,
                'target' => 'orther',
                'status' => 1,
                'mtime' => now(),
                'ctime' => now(),
                'editor' => 'Admin@aimeos.laravel'
            ],
        ];
        $Mug = [
            'code' => 'mug',
            'label' => 'Mug',
            'url' => 'mug',
        ];
        DB::table('mshop_catalog')->where('label','Home')->update($Mug);
        DB::table('mshop_catalog')->where('label','Best sellers')->delete();
        DB::table('mshop_catalog')->where('label','Women')->delete();
        DB::table('mshop_catalog')->where('label','Shirts')->delete();
        DB::table('mshop_catalog')->where('label','Dresses')->delete();
        DB::table('mshop_catalog')->where('label','Tops')->delete();
        DB::table('mshop_catalog')->where('label','Men')->delete();
        DB::table('mshop_catalog')->where('label','T-Shirts')->delete();
        DB::table('mshop_catalog')->where('label','Muscle shirts')->delete();
        DB::table('mshop_catalog')->where('label','Misc')->delete();
        DB::table('mshop_catalog')->where('label','Events')->delete();
        DB::table('mshop_catalog')->where('label','Vouchers')->delete();
        DB::table('mshop_catalog')->where('label','New arrivals')->delete();
        DB::table('mshop_catalog')->where('label','Hot deals')->delete();
        DB::table('mshop_catalog')->insert($data);
    }
}
