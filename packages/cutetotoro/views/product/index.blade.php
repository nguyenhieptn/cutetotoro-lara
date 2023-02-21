@extends('cutetotoro::base')
@section('content')
<div class="detail-content">
    <div class="container">
        <div class="row mb-5">
            <div class=" col col-12 breadcrumb-main-details">
                <p class="d-flex">
                    <a href="{{ route('home') }}">Home</a>
                    <span style="margin: 0 10px; font-family: Manjari"> / {{ $product['product.label'] }}</span>
                </p>
            </div>
        </div>
        <div class="row row-np">
            <div class="col col-12 col-md-7 ">
                <div class="row d-flex">
                    <div class="col col-12 col-xl-2 detail-son">
                        <div class="row main-detail-sb">
                            <div class="col col-4 col-xl-12 detail-sb">
                                <div class="detail-sb-wr">
                                    <img style="width: 100%; height: 100%" src="{{ asset('aimeos/'.$product['media'][0]) }}" alt="Avatar_product">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col col-12 col-xl-10 detail-dad p-2">
                        <div class="main-detail-image" style="width: 100%">
                            <img style="width: 100% ; height: 100%; border-radius: 30px; " src="{{ asset('/aimeos/'.$product['media'][0]) }}" alt="Avatar_product">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col col-12 col-md-5 pt-3">
                <div class="main-details-content-wrap">
                    <ul class="main-details-content mb-0">
                        <li>
                            <ul class="md-assets">
                                <li>
                                    <p>Star Seller</p>
                                </li>
                                <li class="d-flex">
                                    <p style="margin-right: 10px">55 sales </p>
                                    <img style="width: 86px; height: 20px" src="{{ asset('FrontEnd/Image/start-pro.png') }}" alt="">
                                </li>
                            </ul>
                        </li>
                        <li style="margin-top: 30px">
                             <span style="margin-bottom: 10px; display: block ">Only 2 left in stock</span>
                            <span>
                                {!! $product['text'][0] !!}
                            </span>
                        </li>
                        <li style="margin-top: 35px">
                            <ul class="md-price d-flex">
                                <li style="margin-right: 20px">
                                    @php
                                        $sale_price = $product['price'][0]['actual'] - $product['price'][0]['rebate'];
                                    @endphp
                                    <span>{{$sale_price}}$</span>
                                </li>
                                <li>
                                    <span style="font-weight: 400; line-height: 33px;">
                                        <strike>{{$product['price'][0]['actual']}}$</strike>
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li style="margin-top: 30px">
                            <form>
                                @csrf
                                <button type="button" class="btn btn-dark w-100 addToCart" name="addToCart">
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
                    <p class="pt-0">
                        {!! $product['text'][0] !!}
                    </p>
                </div>

                <div id="Paris" class="city tab-content" style="display:none">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Review</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="form-control btn btn-default" value="Submit">
                    </div>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col col-12 pb-3" style="border-bottom: 3px solid #000000 ">
                <p style="margin-bottom: 0">May you also like</p>
            </div>
        </div>
        <div class="row mt-5 detail-also-like">
            <div class="main-carousel" data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true}'>
                @foreach($all_product as $key => $data)
                    <div class="carousel-cell" style="position: relative">
                        <img style="width: 100%" src="{{ asset('/aimeos/'.$data['media'][0]) }}" class="girl" alt="" />
                        <div class="best_seller_bottom">
                            <span>
                                {!! $data['text'][0] !!}
                            </span>
                            <div class="best_seller-price">
                                <span style="display: flex; align-item: center">
                                    <strike style="line-height: 24px">{{$data['price'][0]['actual']}}$</strike>
                                </span>
                                @php
                                    $sale_price = $data['price'][0]['actual'] - $data['price'][0]['rebate'];
                                @endphp
                                <span>{{$sale_price}}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
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
<link rel="stylesheet" href="{{ asset('css/sweetalert.css') }}">
 {{-- tab --}}
 <script>
    function openCity(evt, cityName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("city");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-tab", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " w3-tab";
    }
</script>
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
        var productPrice = "{{ $product['price'][0]['actual'] -  $product['price'][0]['rebate']}}";
        var productQuantity = 1;
        var shipping = "{{$product['price'][0]['costs']}}";
        var _token = $('input[name="_token"]').val();
        $.ajax({
            url: '{{url('/add-cart')}}',
            method: 'POST',
            data: {
                productId: productId,
                productName: productName,
                productImage: productImage,
                productPrice: productPrice,
                productQuantity: productQuantity,
                shipping: shipping,
                _token: _token
            },
            success: function(data) {
                window.location.href = "{{url('/cart')}}";
            }
        });
    });
});
</script>
@stop
