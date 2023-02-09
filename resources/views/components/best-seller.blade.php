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
            <a href="#" class="a-view-all text-end">View all</a>
            <div class="main-carousel row"
                 data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true, "adaptiveHeight": true}'>
                {{-- "autoPlay": 3000 --}}
                @foreach ($BestSeller as $key => $data)
                    <div class="carousel-cell col-md-5 col-sm-2" style="position: relative">
                        <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 10.png') }}"
                             class="girl img-responsive" alt=""/>
                        {{--                        <div class="best_seller_bottom">--}}
                        {{--                                <span>--}}
                        {{--                                    {{ $data->label }}--}}
                        {{--                                </span>--}}
                        {{--                            <div class="best_seller-price">--}}
                        {{--                                <p style="display: flex; align-item: center"><strike--}}
                        {{--                                        style="line-height: 24px">{{ $data->rating }}$</strike></p>--}}
                        {{--                                <p>{{ $data->target }}$</p>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        <div class="best_seller_bottom">
                            <span>
                                    {{ $data->label }}
                                </span>
                            <div class="best_seller-price">
                                <p class="text-center regula-price" style="display: flex;"><strike
                                        style="line-height: 24px">{{ $data->rating }}$</strike></p>
                                <p class="sale-price">{{ $data->target }}$</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{-- <div class="carousel-cell" style="position: relative">
                    <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 10.png') }}"
                        class="girl img-responsive" alt="" />
>>>>>>> 09d7f5fe0b6995cceb40fa0a56bc8a133552f5d7
                        <div class="best_seller_bottom">
                            <span>
                                Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug
                            </span>
                            <div class="best_seller-price">
                                <p class="text-center regula-price" style="display: flex;"><strike
                                        style="line-height: 24px">15,55$</strike></p>
                                <p class="sale-price">14,00$</p>
                            </div>
                        </div>
<<<<<<< HEAD
                    </div>
                @endfor
                {{--                <div class="carousel-cell" style="position: relative">--}}
                {{--                    <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 11.png') }}"--}}
                {{--                        class="girl img-responsive" alt="" />--}}
                {{--                        <div class="best_seller_bottom">--}}
                {{--                            <span>--}}
                {{--                                Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug--}}
                {{--                            </span>--}}
                {{--                            <div class="best_seller-price">--}}
                {{--                                <p style="display: flex; align-item: center"><strike style="line-height: 24px">15,55$</strike></p>--}}
                {{--                                <p>14,00$</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                </div>--}}
                {{--                <div class="carousel-cell" style="position: relative">--}}
                {{--                    <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 12.png') }}"--}}
                {{--                        class="girl img-responsive" alt="" />--}}
                {{--                        <div class="best_seller_bottom">--}}
                {{--                            <span>--}}
                {{--                                Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug--}}
                {{--                            </span>--}}
                {{--                            <div class="best_seller-price">--}}
                {{--                                <p style="display: flex; align-item: center"><strike style="line-height: 24px">15,55$</strike></p>--}}
                {{--                                <p>14,00$</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                </div>--}}
                {{--                <div class="carousel-cell" style="position: relative">--}}
                {{--                    <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 13.png') }}"--}}
                {{--                        class="girl img-responsive" alt="" />--}}
                {{--                        <div class="best_seller_bottom">--}}
                {{--                            <span>--}}
                {{--                                Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug--}}
                {{--                            </span>--}}
                {{--                            <div class="best_seller-price">--}}
                {{--                                <p style="display: flex; align-item: center"><strike style="line-height: 24px">15,55$</strike></p>--}}
                {{--                                <p>14,00$</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                </div>--}}
                {{--                <div class="carousel-cell" style="position: relative">--}}
                {{--                    <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 14.png') }}"--}}
                {{--                        class="girl img-responsive" alt="" />--}}
                {{--                        <div class="best_seller_bottom">--}}
                {{--                            <span>--}}
                {{--                                Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug--}}
                {{--                            </span>--}}
                {{--                            <div class="best_seller-price">--}}
                {{--                                <p style="display: flex; align-item: center"><strike style="line-height: 24px">15,55$</strike></p>--}}
                {{--                                <p>14,00$</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                </div>--}}
                {{--                <div class="carousel-cell" style="position: relative">--}}
                {{--                    <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 10.png') }}"--}}
                {{--                        class="girl img-responsive" alt="" />--}}
                {{--                        <div class="best_seller_bottom">--}}
                {{--                            <span>--}}
                {{--                                Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug--}}
                {{--                            </span>--}}
                {{--                            <div class="best_seller-price">--}}
                {{--                                <p style="display: flex; align-item: center"><strike style="line-height: 24px">15,55$</strike></p>--}}
                {{--                                <p>14,00$</p>--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                </div>--}}
            </div>
            {{-- <div class="carousel-cell" style="position: relative">
                <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 11.png') }}"
                    class="girl img-responsive" alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
            </div>
            <div class="carousel-cell" style="position: relative">
                <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 12.png') }}"
                    class="girl img-responsive" alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
            </div>
            <div class="carousel-cell" style="position: relative">
                <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 13.png') }}"
                    class="girl img-responsive" alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
            </div>
            <div class="carousel-cell" style="position: relative">
                <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 14.png') }}"
                    class="girl img-responsive" alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
            </div>
            <div class="carousel-cell" style="position: relative">
                <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 10.png') }}"
                    class="girl img-responsive" alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
            </div> --}}
        </div>
    </div>
</section>
{{--<link rel="stylesheet" href="{{ asset('FrontEnd/Css/best-seller.css') }}">--}}
<link rel="stylesheet" href="{{ asset('FrontEnd/Css/main-details.css') }}">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
