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
<div class="sale-category ">
    <div class="list-category d-flex justify-content-center">
        <div id="filters" class="button-group">
            <button class="button  d-none" data-filter="*">po</button>
            <button class="button is-checked" data-filter=".mug">mug</button>
            <button class="button" data-filter=".poster">poster</button>
            <button class="button" data-filter=".tshirt">t-shirt</button>
            <button class="button" data-filter=".sticker">sticker</button>
            <button class="button" data-filter=".other">other</button>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xxl-4 col-lg-4 col-12">
            <a href="#"><img class="img-sale-main" src="{{ asset('FrontEnd/Image/sale/main.png') }}"alt=""></a>
        </div>
        <div class="col-xxl-8 col-lg-8 col-12">
            <div class="grid">
                @foreach($data as $dt)
                <div class="grid-item grid-item-cus {{$dt->url}}">
                   
                    <a href="/product-detail/{{$dt->parentid}}" class="d-grid">
                        <img src="/aimeos/{{$dt->link}}" alt="Ảnh sản phẩm" class="grid-item-cus-img">
                        <div class="sale-price">
                            <span>{{$dt->value}}$</span>
                            <?php
                                $sale = $dt->value - $dt->rebate;
                                if($sale<0){
                                    echo '<span>0$</span>';
                                }
                                else{
                                    echo '<span>'.$sale.'$</span>';
                                }
                            ?>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">