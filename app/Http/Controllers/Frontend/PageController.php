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
        $limit = 6;
        $manager = MShop::create(app('aimeos.context')->get(true), 'product');
        $items = $manager->search(clone $manager->filter(), ['text', 'media', 'price', 'catalog'], $limit);
        $products = [];
        foreach ($items as $item) {
            $products[] = convertAimeosProductToProduct($item);
        }
        view()->share('bestSeller', $products);
    }
    public function allProduct(): \Illuminate\Http\Response
    {
        $this->getBestSellerProduct();
        return Response::view('Pages.allProduct');
    }
}
