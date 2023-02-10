<?php
use Illuminate\Support\Facades\DB;
$info_product = DB::table('mshop_product')->join('mshop_product_list','mshop_product.id','=','mshop_product_list.parentid')->join('mshop_media','mshop_product_list.refid','=','mshop_media.id')->join('mshop_text','mshop_product_list.refid','=','mshop_text.id')->join('mshop_price','mshop_product_list.refid','=','mshop_price.id')->get();
print_r(DB::table('mshop_product')->get());
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
                
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="{{ asset('FrontEnd/Css/main-details.css?v='.time()) }}">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
