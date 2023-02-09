<?php

use App\Models\BestSeller;

$BestSeller = BestSeller::orderBy('id')->get();
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
                @foreach ($BestSeller as $key => $data)
                    <a href="/product-detail">
                        <div class="carousel-cell" style="position: relative">
                            <img style="width: 100%" src="{{$data->url }}"
                                class="girl img-responsive" alt="" />
                                <div class="best_seller_bottom">
                                    <span>
                                        {{ $data->label }}
                                    </span>
                                    <div class="best_seller-price">
                                        <p style="display: flex; align-item: center"><strike style="line-height: 24px">{{ $data->config }}$</strike></p>
                                        <p>{{ $data->target }}$</p>
                                    </div>
                                </div>
                        </div>
                    </a>
               @endforeach
               
            </div>
        </div>
        
    </div>
</section>
    <link rel="stylesheet" href="{{ asset('FrontEnd/Css/best-seller.css') }}">
    <link rel="stylesheet" href="{{ asset('FrontEnd/Css/main-details.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
