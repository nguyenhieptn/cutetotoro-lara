<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manager = \Aimeos\MShop::create(app('aimeos.context')->get(), 'catalog');
        $items = $manager->search($manager->filter());
        $itemIds = [];
        foreach ($items as $item) {
//            $itemIds[] = $item->getId();
//            dump($item->label);
            $manager->delete($item);
        }
//        dd('hello');
//        dump($itemIds);
//        $manager->delete($itemIds);
//        dump($manager->create()->toArray());
        $categories = ['Mug', 'T-shirt', 'Sticker', 'Poster', 'Bag', 'Other'];
        $store = [];
        foreach ($categories as $category) {
            $data = [
                'catalog.url'         => $category,
                'catalog.code'        => $category,
                'catalog.label'       => $category,
                'catalog.config'      => [],
                'catalog.status'      => 1,
                'catalog.target'      => "",
                'catalog.hasChildren' => false,
            ];
            $item = $manager->create()->fromArray($data);
            $catalogItem = $manager->insert($item);
        }
//        dd($store);
//        $manager->save($listItem);
    }
}
