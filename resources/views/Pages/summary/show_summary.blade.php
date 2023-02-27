@extends('cutetotoro::base')
@section('content')
<html class="" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="0qptXRr7GC7EBB79hFprPydgfPIiBufdRwiV8SuP">
    <meta http-equiv="Content-Security-Policy"
        content="base-uri 'self'; default-src 'self' 'nonce-ExYB1eCaC2dW86TfTYq/aw=='; style-src &#039;unsafe-inline&#039; &#039;self&#039;; img-src &#039;self&#039; data: https://aimeos.org; frame-src https://www.youtube.com https://player.vimeo.com">

    <link type="text/css" rel="stylesheet" href="{{asset('default/app.css?v=1')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('default/aimeos.css?v=1')}}" />

    <title>Summary</title>
    <title>Address | Default</title>
    <meta name="description" content="Default" />

    <link rel="stylesheet" href="{{asset('default/summary.css?v=1')}}">
    <link rel="stylesheet" href="{{asset('default/checkout-standard.css?v=1')}}">
    <script defer src="{{asset('default/checkout-standard.js?v=1')}}"></script>
    <script defer src="/shop/count"></script>

    <link rel="stylesheet" href="{{asset('default/catalog-filter.css?v=1')}}">
    <script defer src="{{asset('default/catalog-filter.js?v=1')}}"></script>

    <style nonce="ExYB1eCaC2dW86TfTYq/aw==">
    :root {}
    </style>

    <link rel="icon" href="{{asset('/default/assets/icon.png')}}" />

    <link rel="preload" href="{{asset('default/assets/roboto-condensed-v19-latin-regular.woff2')}}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('default/assets/roboto-condensed-v19-latin-700.woff2')}}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('default/assets/bootstrap-icons.woff2')}}" as="font" type="font/woff2"
        crossorigin>
</head>
<body class="page-checkout-index">
    <div class="content">
        <div class="container-fluid">
            <section class="aimeos checkout-standard" data-jsonurl="https://laravel.demo.aimeos.org/jsonapi">
                <nav class="container-xxl">
                    <ol class="steps">
                        <li class="step active basket">
                            <a href="/cart">
                                Cart</a>
                        </li>
                        <li class="step active address">
                            <a href="/checkout">
                                Address</a>
                        </li>
                        <li class="step active payment">
                            <a href="/payment">
                                Payment</a>
                        </li>

                        <li class="step current summary">
                            Summary</li>

                    </ol>
                </nav>
                <div class="container-xxl">
                    <section class="checkout-standard-summary common-summary">
                        <input type="hidden" name="cs_order" value="1">
                        <h1>Summary</h1>
                        <p class="note">Please check your order</p>
                        <div class="common-summary-address row">
                            <div class="item payment 1 col-sm-6">
                                <div class="header">
                                    <a class="modify" href="/checkout">
                                        Change</a>
                                    <h3>Billing address</h3>
                                </div>
                                @php
                                    $address = Session::get('info_address_buyer');
                                @endphp
                                <div class="content">
                                    {{$address['first_name']}} {{$address['last_name']}}<br>{{$address['company']}}<br>{{$address['street']}}<br>{{$address['city']}} {{$address['postal_code']}}<br>
                                    {{$address['select_country']}}<br>{{$address['phone']}}<br>{{$address['email']}}
                                </div>
                            </div>
                            <div class="item delivery 1 col-sm-6">
                                <div class="header">
                                    <a class="modify" href="/checkout">
                                        Change</a>
                                    <h3>Delivery address</h3>
                                </div>
                                <div class="content">
                                    like billing address</div>
                            </div>
                        </div>
                        <div class="common-summary-service row">
                            <div class="item delivery 1 col-sm-6">
                                <div class="header">
                                    <a class="modify" href="/checkout">
                                        Change</a>
                                    <h3>Delivery</h3>
                                </div>

                                <div class="content">
                                    <div class="item">
                                        <h4>Click &amp; Collect</h4>
                                    </div>

                                    <ul class="attr-list">
                                        <li class="delivery-time.hourminute">
                                            <span class="name">
                                                Pick-up time</span>
                                            <span class="value">10:58</span>
                                        </li>
                                        <li class="delivery-supplier.address">
                                            <span class="name">
                                                Pick-up address</span>
                                            <span class="value">Test supplier 1, Test company, Test street 1, 10000 Test
                                                city</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="item payment 1 col-sm-6">
                                <div class="header">
                                    <a class="modify" href="#">
                                        Change</a>
                                        @php
                                            $payment = Session::get('info_payment');
                                        @endphp
                                    <h3>Payment</h3>
                                </div>
                                <div class="content">
                                    <div class="item">
                                        <h4>{{$payment['payment']}}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="common-summary-additional row">
                            <div class="item coupon 1 col-sm-4">
                                <div class="header">
                                    <a class="modify" href="/cart">
                                        Change</a>
                                    <h3>Coupon codes</h3>
                                </div>
                                <div class="content">
                                </div>
                            </div>
                            <div class="item customerref col-sm-4">
                                <div class="header">
                                    <h3>Your reference</h3>
                                </div>
                                <div class="content">
                                    <input class="customerref-value" name="cs_customerref" value="">
                                </div>
                            </div>
                            <div class="item comment col-sm-4">
                                <div class="header">
                                    <h3>Your comment</h3>
                                </div>
                                <div class="content">
                                    <textarea class="comment-value" name="cs_comment"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="checkout-standard-summary-option row">
                            <div class="checkout-standard-summary-option-account col-sm-12">
                                <h3>Customer account</h3>
                                <div class="single 1">
                                    <input id="option-account" type="checkbox" value="1" name="cs_option_account"
                                        checked="checked">
                                    <p>
                                        <label for="option-account">
                                            Create a customer account for me</label>
                                    </p>
                                </div>
                            </div>
                            <div class="checkout-standard-summary-option-terms col-sm-12">
                                <h3>Terms and conditions</h3>
                                <div class="single 1">
                                    <input type="hidden" name="cs_option_terms" value="1">
                                    <input id="option-terms-accept" type="checkbox" value="1"
                                        name="cs_option_terms_value">
                                    <p>
                                        <label for="option-terms-accept">
                                            I accept the <a href="/p/terms" target="_blank" title="terms and conditions"
                                                alt="terms and conditions">terms and conditions</a>, <a
                                                href="/p/privacy" target="_blank" title="privacy policy"
                                                alt="privacy policy">privacy policy</a> and <a href="/p/cancel"
                                                target="_blank" title="cancellation policy"
                                                alt="cancellation policy">cancellation policy</a></label>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="common-summary-detail row">
                            <div class="header">
                                <a class="modify" href="/cart">
                                    Change</a>
                                <h2>Details</h2>
                            </div>
                            @php
                                $cart = Session::get('cart');
                            @endphp
                            <div class="basket table-responsive">
                                <div class="container-fluid">
                                    <section class="aimeos basket-standard" data-jsonurl="https://laravel.demo.aimeos.org/jsonapi">
                <div class="container-xxl">
                    <form action="/update-cart" method="Post">
                        @csrf
                        <div class="row header">
                            <h1 class="col-12 col-sm-6">Cart Review</h1>
                        </div>
                        <div class="common-summary-detail">
                            <div class="header">
                                <h2>Details</h2>
                            </div>
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session()->get('message') }}
                                </div>
                            @elseif (session()->has('error'))
                                <div class="alert alert-danger">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <div class="basket">
                                <div>
                                    <div class="row g-0 headline">
                                        <div class="col-8 col-md-6 offset-4 offset-md-6">
                                            <div class="row g-0">
                                                <div class="col-4 quantity">Quantity</div>
                                                <div class="col-4 unitprice">Price</div>
                                                <div class="col-3 price">Sum</div>
                                                <div class="action col-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                    @if(Session::get('cart')==true)
                                        @php
                                            $total = 0;
                                            $number_product = 0;
                                            $total_shipping = 0;
                                        @endphp
                                        @foreach($cart as $key => $carts)
                                            @php
                                                $subtotal = $carts['product_Price'] * $carts['product_Quantity'];
                                                $total+=$subtotal;
                                                $total_number_product = $carts['product_Quantity'];
                                                $number_product+=$total_number_product;
                                                $shipping_price = $carts['product_shipping'];
                                                $total_shipping+=$shipping_price;
                                            @endphp
                                            <div class="supplier">
                                                <h3 class="supplier-name">{{$carts['product_Name']}}</h3>
                                            </div>
                                            <div class="row g-0 product-item ">
                                                <div class="col-4 col-md-6">
                                                    <div class="row g-0">
                                                        <div class="status col-1">
                                                        </div>
                                                        <div class="image col-11 col-lg-3">
                                                            <img class="detail"
                                                                 src="/aimeos/{{$carts['product_Image']}}">
                                                        </div>
                                                        <div class="details col-12 col-lg-8">
                                                            <p class="code">
                                                                <span class="name">{{$carts['product_Name']}}</span>
                                                            </p>
                                                            <p>
                                                                <span class="name" style="font-size: 15px"><span>Shipping price: </span> {{$carts['product_shipping']}}$</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-8 col-md-6">
                                                    <div class="row g-0">
                                                        <div class="quantity col-4 quantity col-4">
                                                            &nbsp;
                                                            <input class="value" type="number" required="required"
                                                                   name="cartQuantity[{{$carts['session_id']}}]" value="{{$carts['product_Quantity']}}" step="1"
                                                                   min="1" max="2147483647">
                                                        </div>
                                                        <div class="unitprice col-4">{{$carts['product_Price']}}$</div>
                                                        <div class="price col-3">{{$carts['product_Price'] * $carts['product_Quantity']}}$</div>
                                                        <div class="action col-1">
                                                            <a class="minibutton delete"
                                                               href="{{('/delete-product/'.$carts['session_id'])}}"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                        <div class="subtotal row g-0">
                                            <div class="col-8 col-md-6 offset-4 offset-md-6">
                                                <div class="row g-0">
                                                    <div class="col-8">Sub-total</div>
                                                    <div class="price col-3">{{$total}}$</div>
                                                    <div class="action col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="delivery row g-0">
                                            <div class="col-8 col-md-6 offset-4 offset-md-6">
                                                <div class="row g-0">
                                                    <div class="col-8">Total shipping</div>
                                                    <div class="price col-3">{{$total_shipping}}$</div>
                                                    <div class="action col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="total row g-0">
                                            <div class="col-8 col-md-6 offset-4 offset-md-6">
                                                <div class="row g-0 price-total">
                                                    <div class="quantity col-4">{{$number_product}} article</div>
                                                    <div class="col-4 total-text">Total</div>
                                                    <div class="price col-3">{{$total+$total_shipping}}$</div>
                                                    <div class="action col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tax row g-0">
                                            <div class="col-8 col-md-6 offset-4 offset-md-6">
                                                <div class="row g-0">
                                                    <div class="col-8">Incl. 0% tax</div>
                                                    <div class="price col-3">0$</div>
                                                    <div class="action col-1"></div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div>
                                            Please add product to cart
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="button-group">

                        </div>
                    </form>
                </div>
            </section>
                                </div>
                            </div>
                        </div>
                        <div class="button-group">
                            <button class="btn btn-primary btn-lg btn-action">
                                Buy now
                            </button>
                        </div>
                    </section>
                </div>
            </section>
        </div>
    </div>
    <a id="toTop" class="back-to-top" href="#" title="Back to top">
        <div class="top-icon"></div>
    </a>
    <!-- Scripts -->
    <script src="{{asset('default/app.js?v=1')}}"></script>
    <script src="{{asset('default/aimeos.js?v=1')}}"></script>
</body>
</html>
@stop
