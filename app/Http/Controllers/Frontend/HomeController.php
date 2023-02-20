<?php

namespace App\Http\Controllers\Frontend;

use Aimeos\MShop;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function Search_product(Request $request){
        $keywords = $request->keywords_submit;
        $search_product = DB::table('mshop_product_list')
            ->join('mshop_media', 'mshop_product_list.refid', '=', 'mshop_media.id')
            ->join('mshop_text', 'mshop_product_list.refid', '=', 'mshop_text.id')
            ->join('mshop_price', 'mshop_product_list.refid', '=', 'mshop_price.id')
            ->join('mshop_product', 'mshop_product_list.parentid', '=', 'mshop_product.id')
            ->select('link','content','parentid','mshop_product.label','quantity','value','costs','rebate')
            ->groupBy('link','content','parentid','mshop_product.label','quantity','value','costs','rebate')
            ->where('mshop_product.label','like','%'.$keywords.'%')
            ->get();
        return view('Pages.search.search_product')->with(compact('search_product'));
    }
}
