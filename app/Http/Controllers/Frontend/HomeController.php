<?php

namespace App\Http\Controllers\Frontend;

use Aimeos\MShop;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class HomeController extends Controller
{
    public function Search_filter(Request $request){
        $data = $request->keywords_submit;
        $total = 10;
        $manager = MShop::create(app('aimeos.context')->get(true), 'product');
        $items = $manager->search(clone $manager->filter($data), ['text', 'media', 'price', 'catalog'], $total);
        $products = [];
        foreach ($items as $key => $item) {
            $detail = $item;
            $listItems = [];
            foreach ($detail->getRefItems('media') as $media) {
                $listItems['media'][] = $media->get('media.url');
            }
            foreach ($detail->getRefItems('text') as $text) {
                $listItems['text'][] = $text->get('text.content');
            }
            foreach ($detail->getRefItems('catalog') as $catalog) {
                $listItems['catalog'][] = [
                    'label' => $catalog->label,
                    'id'    => $catalog->id,
                ];
            }
            foreach ($detail->getListItems('price') as $price) {
                $price = $price->getRefItem();
                $listItems['price'][] = [
                    'actual'     => $price->get('price.value'),
                    'rebate'     => $price->get('price.rebate'),
                    'sale'       => getSalePrice($price->get('price.value'), $price->get('rebate')),
                    'price_html' => getPriceHtml($price->get('price.value'), $price->get('rebate')),
                ];
            }
            $product = array_merge($detail->toArray(), $listItems);
            $products[] = $product;
        }
        view()->share('all_product',$products);
        return view('Pages.search.search_product');
    }
    public function Show_category_mug(){
        $total = 10;
        $manager = MShop::create(app('aimeos.context')->get(true), 'product');
        $items = $manager->search(clone $manager->filter(), ['text', 'media', 'price', 'catalog'], $total);
        $products = [];
        foreach ($items as $key => $item) {
            $detail = $item;
            $listItems = [];
            foreach ($detail->getRefItems('media') as $media) {
                $listItems['media'][] = $media->get('media.url');
            }
            foreach ($detail->getRefItems('text') as $text) {
                $listItems['text'][] = $text->get('text.content');
            }
            foreach ($detail->getRefItems('catalog') as $catalog) {
                $listItems['catalog'][] = [
                    'label' => $catalog->label,
                    'id'    => $catalog->id,
                ];
            }
            foreach ($detail->getListItems('price') as $price) {
                $price = $price->getRefItem();
                $listItems['price'][] = [
                    'actual'     => $price->get('price.value'),
                    'rebate'     => $price->get('price.rebate'),
                    'sale'       => getSalePrice($price->get('price.value'), $price->get('rebate')),
                    'price_html' => getPriceHtml($price->get('price.value'), $price->get('rebate')),
                ];
            }
            $product = array_merge($detail->toArray(), $listItems);
            $products[] = $product;
        }
        view()->share('all_product',$products);
        $filteredArray = Arr::where($products, function ($value, $key) {
            return $value['catalog'][0]['label'] == 'Mug';
        });
        return view('Pages.Mug.ShowMugCategory')->with(compact('filteredArray'));
    }
    public function Show_category_tshirt(){
        $total = 10;
        $manager = MShop::create(app('aimeos.context')->get(true), 'product');
        $items = $manager->search(clone $manager->filter(), ['text', 'media', 'price', 'catalog'], $total);
        $products = [];
        foreach ($items as $key => $item) {
            $detail = $item;
            $listItems = [];
            foreach ($detail->getRefItems('media') as $media) {
                $listItems['media'][] = $media->get('media.url');
            }
            foreach ($detail->getRefItems('text') as $text) {
                $listItems['text'][] = $text->get('text.content');
            }
            foreach ($detail->getRefItems('catalog') as $catalog) {
                $listItems['catalog'][] = [
                    'label' => $catalog->label,
                    'id'    => $catalog->id,
                ];
            }
            foreach ($detail->getListItems('price') as $price) {
                $price = $price->getRefItem();
                $listItems['price'][] = [
                    'actual'     => $price->get('price.value'),
                    'rebate'     => $price->get('price.rebate'),
                    'sale'       => getSalePrice($price->get('price.value'), $price->get('rebate')),
                    'price_html' => getPriceHtml($price->get('price.value'), $price->get('rebate')),
                ];
            }
            $product = array_merge($detail->toArray(), $listItems);
            $products[] = $product;
        }
        view()->share('all_product',$products);
        $filteredArray = Arr::where($products, function ($value, $key) {
            return $value['catalog'][0]['label'] == 'T-shirt';
        });
        return view('Pages.tshirt.tshirt')->with(compact('filteredArray'));
    }
    public function Show_category_sticker(){
        $total = 10;
        $manager = MShop::create(app('aimeos.context')->get(true), 'product');
        $items = $manager->search(clone $manager->filter(), ['text', 'media', 'price', 'catalog'], $total);
        $products = [];
        foreach ($items as $key => $item) {
            $detail = $item;
            $listItems = [];
            foreach ($detail->getRefItems('media') as $media) {
                $listItems['media'][] = $media->get('media.url');
            }
            foreach ($detail->getRefItems('text') as $text) {
                $listItems['text'][] = $text->get('text.content');
            }
            foreach ($detail->getRefItems('catalog') as $catalog) {
                $listItems['catalog'][] = [
                    'label' => $catalog->label,
                    'id'    => $catalog->id,
                ];
            }
            foreach ($detail->getListItems('price') as $price) {
                $price = $price->getRefItem();
                $listItems['price'][] = [
                    'actual'     => $price->get('price.value'),
                    'rebate'     => $price->get('price.rebate'),
                    'sale'       => getSalePrice($price->get('price.value'), $price->get('rebate')),
                    'price_html' => getPriceHtml($price->get('price.value'), $price->get('rebate')),
                ];
            }
            $product = array_merge($detail->toArray(), $listItems);
            $products[] = $product;
        }
        view()->share('all_product',$products);
        $filteredArray = Arr::where($products, function ($value, $key) {
            return $value['catalog'][0]['label'] == 'Sticker';
        });
        return view('Pages.tshirt.tshirt')->with(compact('filteredArray'));
    }
    public function Show_category_poster(){
        $total = 10;
        $manager = MShop::create(app('aimeos.context')->get(true), 'product');
        $items = $manager->search(clone $manager->filter(), ['text', 'media', 'price', 'catalog'], $total);
        $products = [];
        foreach ($items as $key => $item) {
            $detail = $item;
            $listItems = [];
            foreach ($detail->getRefItems('media') as $media) {
                $listItems['media'][] = $media->get('media.url');
            }
            foreach ($detail->getRefItems('text') as $text) {
                $listItems['text'][] = $text->get('text.content');
            }
            foreach ($detail->getRefItems('catalog') as $catalog) {
                $listItems['catalog'][] = [
                    'label' => $catalog->label,
                    'id'    => $catalog->id,
                ];
            }
            foreach ($detail->getListItems('price') as $price) {
                $price = $price->getRefItem();
                $listItems['price'][] = [
                    'actual'     => $price->get('price.value'),
                    'rebate'     => $price->get('price.rebate'),
                    'sale'       => getSalePrice($price->get('price.value'), $price->get('rebate')),
                    'price_html' => getPriceHtml($price->get('price.value'), $price->get('rebate')),
                ];
            }
            $product = array_merge($detail->toArray(), $listItems);
            $products[] = $product;
        }
        view()->share('all_product',$products);
        $filteredArray = Arr::where($products, function ($value, $key) {
            return $value['catalog'][0]['label'] == 'Poster';
        });
        return view('Pages.poster.poster')->with(compact('filteredArray'));
    }
    public function Show_category_bag(){
        $total = 10;
        $manager = MShop::create(app('aimeos.context')->get(true), 'product');
        $items = $manager->search(clone $manager->filter(), ['text', 'media', 'price', 'catalog'], $total);
        $products = [];
        foreach ($items as $key => $item) {
            $detail = $item;
            $listItems = [];
            foreach ($detail->getRefItems('media') as $media) {
                $listItems['media'][] = $media->get('media.url');
            }
            foreach ($detail->getRefItems('text') as $text) {
                $listItems['text'][] = $text->get('text.content');
            }
            foreach ($detail->getRefItems('catalog') as $catalog) {
                $listItems['catalog'][] = [
                    'label' => $catalog->label,
                    'id'    => $catalog->id,
                ];
            }
            foreach ($detail->getListItems('price') as $price) {
                $price = $price->getRefItem();
                $listItems['price'][] = [
                    'actual'     => $price->get('price.value'),
                    'rebate'     => $price->get('price.rebate'),
                    'sale'       => getSalePrice($price->get('price.value'), $price->get('rebate')),
                    'price_html' => getPriceHtml($price->get('price.value'), $price->get('rebate')),
                ];
            }
            $product = array_merge($detail->toArray(), $listItems);
            $products[] = $product;
        }
        view()->share('all_product',$products);
        $filteredArray = Arr::where($products, function ($value, $key) {
            return $value['catalog'][0]['label'] == 'Bag';
        });
        return view('Pages.bag')->with(compact('filteredArray'));
    }
    public function Show_category_orther(){
        $total = 10;
        $manager = MShop::create(app('aimeos.context')->get(true), 'product');
        $items = $manager->search(clone $manager->filter(), ['text', 'media', 'price', 'catalog'], $total);
        $products = [];
        foreach ($items as $key => $item) {
            $detail = $item;
            $listItems = [];
            foreach ($detail->getRefItems('media') as $media) {
                $listItems['media'][] = $media->get('media.url');
            }
            foreach ($detail->getRefItems('text') as $text) {
                $listItems['text'][] = $text->get('text.content');
            }
            foreach ($detail->getRefItems('catalog') as $catalog) {
                $listItems['catalog'][] = [
                    'label' => $catalog->label,
                    'id'    => $catalog->id,
                ];
            }
            foreach ($detail->getListItems('price') as $price) {
                $price = $price->getRefItem();
                $listItems['price'][] = [
                    'actual'     => $price->get('price.value'),
                    'rebate'     => $price->get('price.rebate'),
                    'sale'       => getSalePrice($price->get('price.value'), $price->get('rebate')),
                    'price_html' => getPriceHtml($price->get('price.value'), $price->get('rebate')),
                ];
            }
            $product = array_merge($detail->toArray(), $listItems);
            $products[] = $product;
        }
        view()->share('all_product',$products);
        $filteredArray = Arr::where($products, function ($value, $key) {
            return $value['catalog'][0]['label'] == 'Orther';
        });
        return view('Pages.orther')->with(compact('filteredArray'));
    }
}
