<?php
use Illuminate\Support\Facades\DB;
$info_product = DB::table('mshop_text')
    ->join('mshop_media', 'mshop_text.mtime', '=', 'mshop_media.mtime')
    ->join('mshop_price', 'mshop_text.mtime', '=', 'mshop_price.mtime')
    ->join('mshop_product_list', 'mshop_text.mtime', '=', 'mshop_product_list.mtime')
    ->join('mshop_product', 'mshop_product_list.parentid', '=', 'mshop_product.id')
    ->get();
?>
<div class="best_seller">
    <div class="container container-globe">
        <div class="row best_seller_top">
            <div class="best_seller_top-image">
                <img class="bsl__bn" src="{{ asset('FrontEnd/Image/Group%204.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
<section id="slider" class="slider-slictiky">
    <div class="container container-globe" style="position: relative">
        <div class="row">
            <a href="/all-product" class="a-view-all text-end">View all</a>
            <div class="main-carousel row"
                 data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true, "adaptiveHeight": true}'>
                {{-- "autoPlay": 3000 --}}
                @foreach ($info_product as $key => $data)
                        <div class="carousel-cell" style="position: relative">
                            <a href="/product-detail"><img src="/aimeos/{{$data->link }}"></a>
                                {{-- class="girl img-responsive" alt="" /> --}}
                                <div class="best_seller_bottom">
                                    <span>
                                        {!! $data->content !!}
                                    </span>
                                    <div class="best_seller-price">
                                        <p style="display: flex; align-item: center"><strike style="line-height: 34px">{{ $data->value }}$</strike></p>
                                        <?php
                                            $sale = $data->value - $data->rebate
                                        ?>
                                        <p>{{ $sale}}$</p>
                                    </div>
                                </div>
                        </div>
               @endforeach
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="{{ asset('FrontEnd/Css/main-details.css?v='.time()) }}">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
