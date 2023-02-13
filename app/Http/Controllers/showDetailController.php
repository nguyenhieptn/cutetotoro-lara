<?php

namespace App\Http\Controllers;

use Aimeos\MShop;
use App;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Redireact;

session_start();

class showDetailController extends Controller
{
    public function getBestSellerProduct()
    {
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
        view()->share('bestSeller', $products);
    }

    public function show_detail($idProduct)
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
        return Response::view(Shop::template('product.index'), [])
            ->header('Cache-Control', 'no-store, , max-age=0')
            ->with(compact('product', 'salePrice'));
        return view('Pages.mainDetail')->with(compact('product', 'salePrice'));
    }

    public function add_cart(Request $request)
    {
        $data = $request->all();
        $session_id = substr(md5(microtime()), rand(0, 26), 5);
        $cart = Session::get('cart');
        if ($cart == true) {
            $is_avaiable = 0;
            foreach ($cart as $key => $val) {
                if ($val['product_Id'] == $data['productId']) {
                    $is_avaiable++;
                }
            }
            if ($is_avaiable == 0) {
                $cart[] = array(
                    'session_id'       => $session_id,
                    'product_Name'     => $data['productName'],
                    'product_Id'       => $data['productId'],
                    'product_Image'    => $data['productImage'],
                    'product_Quantity' => $data['productQuantity'],
                    'product_Price'    => $data['productPrice'],
                    'product_shipping'    => $data['shipping']
                );
                Session::put('cart', $cart);
            }
        } else {
            $cart[] = array(
                'session_id'       => $session_id,
                'product_Name'     => $data['productName'],
                'product_Id'       => $data['productId'],
                'product_Image'    => $data['productImage'],
                'product_Quantity' => $data['productQuantity'],
                'product_Price'    => $data['productPrice'],
                'product_shipping'    => $data['shipping']
            );
        }
        Session::put('cart', $cart);
        Session::save();
    }
    public function deleteProduct($session_id)
    {
        $cart = Session::get('cart');
        if($cart == true){
            foreach($cart as $key => $carts){
                if($carts['session_id']==$session_id){
                    unset($cart[$key]);
                }
            }
            Session::put('cart',$cart);
            return redirect()->back()->with('message','Deleta product succsess');
        }else{
            return redirect()->back()->with('error','Not data product');
        }
    }
    public function updateCart(Request $request)
    {
        $data = $request->all();
        $cart = Session::get('cart');
        if($cart==true){
            foreach($data['cartQuantity'] as $key => $qty){
                foreach($cart as $key2 => $value){
                    if($value['session_id']==$key){
                        $cart[$key2]['product_Quantity'] = $qty;
                    }
                }
            }
            Session::put('cart',$cart);
            return redirect()->back()->with('message','Update cart succsess');
        }else{
            return redirect()->back()->with('message','Not data product');
        }
    }
    public function cart()
    {
        return view('Pages.cart.show_cart');
    }
    public function show_checkout()
    {
        return view('Pages.checkOut');
    }
}
