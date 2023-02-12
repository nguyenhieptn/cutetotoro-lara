<?php
use Illuminate\Support\Facades\DB;
$info_product = DB::table('mshop_text')
    ->join('mshop_media', 'mshop_text.mtime', '=', 'mshop_media.mtime')
    ->join('mshop_price', 'mshop_text.mtime', '=', 'mshop_price.mtime')
    ->join('mshop_product_list', 'mshop_text.mtime', '=', 'mshop_product_list.mtime')
    ->join('mshop_product', 'mshop_product_list.parentid', '=', 'mshop_product.id')
    ->limit(6)->get();
?>
<div class="sale-category ">
    <div class="list-category d-flex justify-content-center">
        <div id="filters" class="button-group">
            <button class="button  d-none" data-filter="*">po</button>
            <button class="button is-checked" data-filter=".default">mug</button>
            <button class="button" data-filter=".event">poster</button>
            <button class="button" data-filter=".t-shirt">t-shirt</button>
            <button class="button" data-filter=".sticker">sticker</button>
            <button class="button" data-filter=".other">other</button>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xxl-4 col-lg-4 col-12">
            <a href="#"><img class="img-sale-main" src="{{ asset('FrontEnd/Image/sale/main.png') }}"
                    alt=""></a>
        </div>
        <div class="col-xxl-8 col-lg-8 col-12">
            <div class="grid">
                @foreach ($info_product as $key => $data)
                    <div class="grid-item grid-item-cus {{$data->type}}">
                        <a href="/product-detail/{{$data->parentid}}" class="d-grid">
                            <img src="/aimeos/{{$data->link }}" alt="product" class="grid-item-cus-img">
                            <div class="sale-price">
                                <span>{{ $data->value }}$</span>
                                <?php
                                    $sale = $data->value - $data->rebate
                                ?>
                                <span>{{ $sale }}$</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

</div>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
