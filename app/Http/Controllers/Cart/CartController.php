<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
session_start();

class CartController extends Controller
{
    public function Payment(Request $request){
        $data = $request->all();
        Session::put('info_address_buyer',$data);
        Session::get('cart');
        return view('Pages.payment.show_payment');
    }
    public function Summary(Request $request){
        $data = $request->all();
        Session::put('info_payment',$data);
        Session::get('info_address_buyer');
        Session::get('cart');
        return view('Pages.summary.show_summary');
    }
    public function update_cart_summary(Request $request){
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
}
