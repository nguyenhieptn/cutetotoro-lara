<?php

namespace App\Http\Controllers\Frontend;

use Aimeos\Shop\Facades\Shop;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CartController extends Controller
{
    public function index(Request $request): \Illuminate\Http\Response
    {
        $params = ['page' => 'page-basket-index'];

        foreach (app('config')->get('shop.page.basket-index') as $name) {
            $params['aiheader'][$name] = Shop::get($name)->header();
            $params['aibody'][$name] = Shop::get($name)->body();
//            if ($name == "basket/standard")
//                dump($name, Shop::get($name)->body());
        }
        return Response::view(Shop::template('basket.index'), $params)
            ->header('Cache-Control', 'no-store, , max-age=0');
    }
}
