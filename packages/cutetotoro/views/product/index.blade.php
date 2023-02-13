@extends('cutetotoro::base')

{{--@section('aimeos_header')--}}
{{--    <title>{{ __( 'Basket') }}</title>--}}
{{--    <?= $aiheader['locale/select'] ?? '' ?>--}}
{{--    <?= $aiheader['catalog/search'] ?? '' ?>--}}
{{--    <?= $aiheader['catalog/tree'] ?? '' ?>--}}
{{--    <?= $aiheader['basket/bulk'] ?? '' ?>--}}
{{--    <?= $aiheader['basket/standard'] ?? '' ?>--}}
{{--    <?= $aiheader['basket/related'] ?? '' ?>--}}
{{--@stop--}}

@section('content')
<div class="detail-content">
    <div class="container">
        <div class="row mb-5">
            <div class=" col col-12 breadcrumb-main-details">
                <p class="d-flex">
                    <a href="{{ route('home') }}">Home </a>
                    <span style="margin: 0 10px;">/{{ $product['product.label'] }}</span>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col col-sm-12 col-md-8 p-2">
                <div class="row d-flex">
                    <div class="col col-12 col-xl-2 detail-son">
                        <div class="row main-detail-sb">
                            @foreach($product['media'] as $img)
                            <div class="col col-3 col-xl-12 detail-sb">
                                <div class="detail-sb-wr">
                                    <img style="width: 100%; height: 100%" src="{{ asset('aimeos/'.$img) }}" alt="">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="col col-12 col-xl-10 detail-dad p-2">
                        <div class="main-detail-image" style="width: 100%">
                            <img style="width: 100% ; height: 100%" src="{{ asset('/aimeos/'.$product['media'][0]) }}"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col col-sm-12 col-md-4 pt-3">
                <div class="main-details-content-wrap">
                    <ul class="main-details-content mb-0">
                        <li>
                            <ul class="md-assets">
                                <li>
                                    <p>Star Seller</p>
                                </li>
                                <li class="d-flex">
                                    <p style="margin-right: 10px">55 sales </p>
                                    <img style="width: 86px; height: 20px"
                                        src="{{ asset('FrontEnd/Image/start-pro.png') }}" alt="">
                                </li>
                            </ul>
                        </li>
                        <li style="margin-top: 30px">
                            {{--                                <span style="margin-bottom: 10px; display: block ">Only 2 left in stock</span>--}}
                            <span>Spirited away Soot Sprite Character Mug, with quote: “Finish what you
                                started Human” Based on Spirited away movie. Coffee Mug
                            </span>
                        </li>
                        <li style="margin-top: 35px">
                            <ul class="md-price d-flex">
                                <li style="margin-right: 20px">
                                    <span>14,00$</span>
                                </li>
                                <li>
                                    <span style="font-weight: 400; font-size: 30px; line-height: 33px;"><strike>15,99
                                            $</strike></span>
                                </li>
                            </ul>
                        </li>
                        <li style="margin-top: 30px">
                            <form>
                                @csrf
                                <button style="font-size: 2em" type="button" class="btn btn-dark w-100 addToCart" name="addToCart">
                                    Add to cart
                                </button>
                            </form>
                        </li>
                        <li style="margin-top: 35px">
                            <p>Star Seller. This seller consistently earned 5-star reviews, shipped on time, and
                                replied quickly to any messages they received.
                                <br>

                                Arrives by Feb 8-14 if you order today.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col col-12">
                <div class="w3-bar w3-white mb-4" style="border-bottom: 3px solid #000000 ">
                    <button class="w3-bar-item w3-button tablink w3-tab"
                        onclick="openCity(event,'London')"><span>DESCRIPTION</span></button>
                    <button class="w3-bar-item w3-button tablink"
                        onclick="openCity(event,'Paris')"><span>REVIEWS</span></button>
                </div>
                <div id="London" class=" city tab-content">
                    <p class="pt-0">Add a detailed description of the demo article that may be a little bit
                        longer.</p>
                </div>

                <div id="Paris" class="city tab-content" style="display:none">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, consequatesse cillum dolore eu
                        fugiat nulla pariat laborum.</p>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col col-12 pb-3" style="border-bottom: 3px solid #000000 ">
                <p style="margin-bottom: 0">May you also like</p>
            </div>
        </div>

        <div class="row mt-5 detail-also-like">
            <div class="main-carousel"
                data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true, "adaptiveHeight": true}'>
                {{-- "autoPlay": 3000 --}}
                <div class="carousel-cell" style="position: relative">
                    <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 10.png') }}"
                        class="girl img-responsive" alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human”
                            Based on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell" style="position: relative">
                    <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 11.png') }}"
                        class="girl img-responsive" alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human”
                            Based on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell" style="position: relative">
                    <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 12.png') }}"
                        class="girl img-responsive" alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human”
                            Based on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell" style="position: relative">
                    <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 13.png') }}"
                        class="girl img-responsive" alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human”
                            Based on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell" style="position: relative">
                    <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 14.png') }}"
                        class="girl img-responsive" alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human”
                            Based on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell" style="position: relative">
                    <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 10.png') }}"
                        class="girl img-responsive" alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human”
                            Based on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="{{ asset('js/sweetalert.min.js') }}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript">
<?php
// dd($product);
$link = $product['media'][0];
?>
$(document).ready(function(e) {
    $('.addToCart').click(function() {
        var id = {{$product['product.id']}};
        var productId = {{$product['product.id']}};
        var productName = "{{$product['product.label']}}";
        var productImage = "{{$link}}";
        var productPrice = {!! $product['price'][0]['price_html'] !!};
        var productQuantity = 1;
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: '{{url(' / add-cart ')}}',
            method: 'POST',
            data: {
                productId: productId,
                productName: productName,
                productImage: productImage,
                productPrice: productPrice,
                productQuantity: productQuantity,
                _token: _token
            },
            success: function(data) {
                swal({
                        title: "Added in the cart",
                        text: "You can chose product or go to page check out",
                        showCancelButton: true,
                        cancelButtonText: "A Here",
                        confirmButtonClass: "btn-success",
                        confirmButtonText: "Go to the cart",
                        closeOnConfirm: false
                    },
                    function() {
                        window.location.href = "{{url('/cart')}}";
                    }
                );
            }
        });
    });
});
</script>
@stop