<?php

namespace App\Http\Controllers\Frontend;

use Aimeos\Controller\Frontend;
use Aimeos\MShop;
use Aimeos\Shop\Facades\Shop;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
session_start();

class ProductController extends Controller
{
    public function detail($id): \Illuminate\Http\Response
    {
        $productManager = MShop::create(app('aimeos.context')->get(), 'product');
        $product = $productManager->get($id, ['text', 'media', 'price', 'catalog']);
        $product = convertAimeosProductToProduct($product);
        view()->share('product', $product);
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
        return Response::view(Shop::template('product.index'), [])
            ->header('Cache-Control', 'no-store, , max-age=0');
    }

    public function addToCart($id)
    {
        $productManager = Frontend::create( app('aimeos.context')->get(), 'product' );
        $product = $productManager->get($id, ['text', 'price', 'media', 'attribute']);
        $basket= Frontend::create( app('aimeos.context')->get(), 'basket' )
            ->addProduct( $product, );
        dd($basket);
        return $basket;
    }


}
