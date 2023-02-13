<?php

namespace App\Http\Controllers\Frontend;

use Aimeos\Controller\Frontend;
use Aimeos\MShop;
use Aimeos\Shop\Facades\Shop;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ProductController extends Controller
{
    public function detail($id): \Illuminate\Http\Response
    {
        $product = DB::table('mshop_product_list')
            ->join('mshop_media', 'mshop_product_list.refid', '=', 'mshop_media.id')
            ->join('mshop_text', 'mshop_product_list.refid', '=', 'mshop_text.id')
            ->join('mshop_price', 'mshop_product_list.refid', '=', 'mshop_price.id')
            ->join('mshop_product', 'mshop_product_list.parentid', '=', 'mshop_product.id')
            ->where('parentid', $idProduct)
            ->first();
        $salePrice = $product->value - $product->rebate;
        if ($salePrice < 0) {
            $salePrice = 0;
        }
        $productManager = MShop::create(app('aimeos.context')->get(), 'product');
        $product = $productManager->get($id, ['text', 'media', 'price', 'catalog']);
        $product = convertAimeosProductToProduct($product);
        view()->share('product', $product);
        return Response::view(Shop::template('product.index'), [])->with(compact('product', 'salePrice'))
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
