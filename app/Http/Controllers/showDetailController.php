<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
session_start();

class showDetailController extends Controller
{
    public function show_detail($idProduct){
        $info_product = DB::table('mshop_text')
            ->join('mshop_media', 'mshop_text.mtime', '=', 'mshop_media.mtime')
            ->join('mshop_price', 'mshop_text.mtime', '=', 'mshop_price.mtime')
            ->join('mshop_product_list', 'mshop_text.mtime', '=', 'mshop_product_list.mtime')
            ->join('mshop_product', 'mshop_product_list.parentid', '=', 'mshop_product.id')
            ->get();
        $infoAll = $info_product->where('parentid',$idProduct)->first();
      
        Session::put('name',$infoAll->label);
        Session::put('link',$infoAll->link);
        return view('Pages.mainDetail')->with(compact('infoAll'));
    }
    public function show_cart()
    {
        return view('Pages.cart.show_cart');
    }
}
