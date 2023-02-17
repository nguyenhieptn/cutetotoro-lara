<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
session_start();

class CartController extends Controller
{
    public function Delivery(Request $request){
        $data = $request->all();
        Session::put('info_address_buyer',$data);
        return view('Pages.delivery.show_delivery');
    }
}
