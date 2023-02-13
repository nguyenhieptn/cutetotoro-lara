<?php

namespace App\Http\Controllers\Frontend;

use Aimeos\Controller\Frontend;
use Aimeos\MShop;
use Aimeos\MShop\Exception;
use Aimeos\Shop\Base\Aimeos;
use Aimeos\Shop\Facades\Shop;
use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Aimeos\Shop\Facades\Product;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

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

    /**
     * @throws Exception
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function getBestSellerProduct()
    {
        $limit = 10;
        $manager = MShop::create(app('aimeos.context')->get(true), 'product');
        $items = $manager->search(clone $manager->filter(), ['text', 'media', 'price', 'catalog'], $limit);
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
                    'id' => $catalog->id,
                ];
            }
            foreach ($detail->getListItems('price') as $price) {
                $price = $price->getRefItem();
                $listItems['price'][] = [
                    'actual' => $price->get('price.value'),
                    'rebate' => $price->get('price.rebate'),
                    'sale'   => getSalePrice($price->get('price.value'), $price->get('rebate')),
                    'price_html'=> getPriceHtml($price->get('price.value'), $price->get('rebate')),
                ];
            }
            $product = array_merge($detail->toArray(), $listItems);
            $products[] = $product;
        }
        view()->share('bestSeller', $products);
    }
    public function Grid(): \Illuminate\Http\Response
    {
        $this->getBestSellerProduct();
        return Response::view('components.sale');
    }
}
