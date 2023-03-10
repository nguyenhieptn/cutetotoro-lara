@php
$cart = Session::get('cart');
@endphp
@extends('cutetotoro::base')
{{-- @section('aimeos_head_nav')
    <?= $aibody['catalog/tree'] ?? '' ?>
@stop --}}
@section('content')
<head>
    <link type="text/css" rel="stylesheet" href="{{asset('/default/app.css?v=1')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('/default/aimeos.css?v=1')}}" />
    <link rel="stylesheet" href="{{asset('/default/locale-select.css?v=1')}}">
    <script defer src="{{asset('/default/locale-select.js?v=1')}}"></script>
    <script defer src="/shop/count"></script>
    <link rel="stylesheet" href="{{asset('/default/catalog-filter.css?v=1')}}">
    <script defer src="{{asset('/default/catalog-filter.js?v=1')}}"></script>
    <link rel="stylesheet" href="{{asset('/default/basket-bulk.css?v=1')}}">
    <script defer src="{{asset('/default/basket-bulk.js?v=1')}}"></script>
    <link class="basket-standard" rel="stylesheet" href="{{asset('/default/summary.css?v=1')}}">
    <link class="basket-standard" rel="stylesheet" href="{{asset('/default/basket-standard.css?v=1')}}">
    <script defer class="basket-standard" src="{{asset('/default/basket-standard.js?v=1')}}"></script>
    <link rel="stylesheet" href="{{asset('/default/basket-related.css?v=1')}}">
    <script defer src="{{asset('/default/basket-related.js?v=1')}}"></script>
    <link rel="stylesheet" href="{{ asset('FrontEnd/Css/main-details.css') }}">
    </style>
    <link rel="preload" href="/vendor/shop/themes/default/assets/roboto-condensed-v19-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/vendor/shop/themes/default/assets/roboto-condensed-v19-latin-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/vendor/shop/themes/default/assets/bootstrap-icons.woff2" as="font" type="font/woff2" crossorigin>
</head>
<body class="page-basket-index">
    <div class="content">
        <div class="container-fluid">
            <section class="aimeos basket-standard" data-jsonurl="https://laravel.demo.aimeos.org/jsonapi">
                <div class="container-xxl">
                    <form action="/update-cart" method="Post">
                        @csrf
                        <div class="row header">
                            <h1 class="col-12 col-sm-6">Cart Product</h1>
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
                        <div class="basket-standard-coupon">
                            <div class="header">
                                <h2>Coupon codes</h2>
                            </div>
                            <div class="content">
                                <div class="input-group coupon-new">
                                    <input class="form-control coupon-code" type="text" maxlength="255"
                                        placeholder="Coupon codes" name="b_coupon">
                                    <button class="btn btn-primary" type="button">Apply</button>
                                </div>

                            </div>
                        </div>
                        <div class="button-group">
                            <a class="btn btn-default btn-lg btn-back" href="/">
                                Back</a>
                            <button class="btn btn-default btn-lg" type="submit">
                                Update</button>
                            <a class="btn btn-primary btn-lg btn-action" href="/checkout">
                                Checkout</a>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
    <!-- Scripts -->
    <script src="https://laravel.demo.aimeos.org/vendor/shop/themes/default/app.js?v=1"></script>
    <script src="https://laravel.demo.aimeos.org/vendor/shop/themes/default/aimeos.js?v=1"></script>
</body>
</div>
@stop
