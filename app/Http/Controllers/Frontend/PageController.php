<?php

namespace App\Http\Controllers\Frontend;

use Aimeos\MShop;
use Aimeos\Shop\Base\Aimeos;
use Aimeos\Shop\Facades\Shop;
use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Aimeos\Shop\Facades\Product;

class PageController extends Controller
{
    public function page($page = null)
    {
        if ($page) {
            return "not ready";
        } else {
            return $this->home();
        }
    }

    public function home(): \Illuminate\Http\Response
    {
        $this->getBestSellerProduct();
        return Response::view(Shop::template('page.home'), [])
            ->header('Cache-Control', 'no-store, , max-age=0');
    }

    public function getBestSellerProduct()
    {
        $manager = \Aimeos\MShop::create(app('aimeos.context')->get(), 'product');
        $items = $manager->search(clone $manager->filter());
        $products = [];
        $limit = 5;
        foreach ($items as $key => $item) {
            $detail = $manager->get($item->getId(), ['text', 'media', 'price', 'catalog']);
            $listItems = [];
            foreach ($detail->getRefItems('media') as $media) {
                $listItems['media'][] = $media->get('media.url');
            }

            foreach ($detail->getRefItems('catalog') as $media) {
                $listItems['catalog'][] = $media->get('catalog.label');
            }
            $product = array_merge($detail->toArray(), $listItems);
            $products[]= $product;
            if ($key < $limit - 1)
                break;
        }
        view()->share('bestSeller', $products);
    }
}
