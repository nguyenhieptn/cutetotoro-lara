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
