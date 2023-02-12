<?php
use Illuminate\Support\Facades\DB;
$data = DB::table('mshop_product_list')
    ->join('mshop_media','mshop_product_list.refid','=','mshop_media.id')
    ->join('mshop_text','mshop_product_list.refid','=','mshop_text.id')
    ->join('mshop_price','mshop_product_list.refid','=','mshop_price.id')
    ->join('mshop_product','mshop_product_list.parentid','=','mshop_product.id')
    ->select('parentid','link','content','currencyid','quantity','value','costs','rebate','taxrate','code','url','rating','ratings','instock')
    ->groupBy('parentid','link','content','currencyid','quantity','value','costs','rebate','taxrate','code','url','rating','ratings','instock')
    ->get();
?>