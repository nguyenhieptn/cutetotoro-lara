<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Redireact;

class ProductController extends Controller
{
    public function get_product(){
        $data = DB::table('mshop_text')
            ->join('mshop_media','mshop_text.mtime','=','mshop_media.mtime')
            ->join('mshop_price','mshop_text.mtime','=','mshop_price.mtime')
            ->get();
        return Redireact::to('/')->with(compact('data'));
    }
}
