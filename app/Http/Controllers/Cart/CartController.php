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
}
