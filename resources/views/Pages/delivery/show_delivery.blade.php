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
    <title>Checkout</title>
    <title>Delivery</title>
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
                                Basket</a>
                        </li>
                        <li class="step active address">
                            <a href="/checkout">
                                Address</a>
                        </li>
                        <li class="step current delivery">
                            Delivery</li>
                        <li class="step payment">
                            Payment</li>
                        <li class="step summary">
                            Summary</li>
                        <li class="step process">
                            process</li>
                    </ol>
                </nav>
                <form class="container-xxl" method="POST" action="/shop/checkout/payment">
                    @if(Session::get('info_address_buyer')==true)
                        <p>This order have info delivery</p>
                    @else
                        <p>This order do not info delivery</p>
                    @endif
                    <input class="csrf-token" type="hidden" name="_token"
                        value="pW0kI04GSNVKT3Q2Cr0aIHYtMfIvtWtgmdaJBaoi">
                    <section class="checkout-standard-delivery">
                        <h1>Delivery</h1>
                        <p class="note">Please choose your delivery method</p>
                        <div id="c_delivery-1" class="item item-service row">
                            <div class="col-sm-6">
                                <label class="description" for="c_deliveryoption-1">
                                    <input class="option" type="radio" id="c_deliveryoption-1" name="c_deliveryoption"
                                        value="1" checked="checked">
                                    <span class="price-value">
                                        € 0.00</span>
                                    <div class="icons">

                                        <div class="icon">
                                            <!--
--><img src="https://aimeos.org/media/service/pickup.png" srcset="https://aimeos.org/media/service/pickup.png 1w"
                                                alt="Demo: pickup.png" sizes="100vw">
                                            <!--
-->
                                        </div>

                                    </div>

                                    <h2>Click &amp; Collect</h2>

                                    <p class="short">Local pick-up</p>
                                    <p class="long">Pick-up at one of our local stores</p>

                                </label>
                            </div>


                            <div class="col-sm-6">
                                <ul class="form-list form-horizontal" style="display: none;">


                                    <li class="row form-item form-group time.hourminute mandatory">

                                        <div class="col-md-5">
                                            <label class="form-item-label" for="delivery-time.hourminute">
                                                Pick-up time</label>
                                        </div>


                                        <div class="col-md-7">
                                            <input class="form-control" type="time" id="delivery-time.hourminute"
                                                name="c_delivery[1][time.hourminute]" value="09:21" placeholder="HH:mm">
                                        </div>


                                    </li>

                                    <li class="row form-item form-group supplier.code mandatory">

                                        <div class="col-md-5">
                                            <label class="form-item-label" for="delivery-supplier.code">
                                                Pick-up location</label>
                                        </div>


                                        <div class="col-md-7 form-item-value">
                                            <input class="form-control" type="radio"
                                                id="delivery-supplier.code-demo-test1"
                                                name="c_delivery[1][supplier.code]" value="demo-test1"
                                                checked="checked">
                                            <label for="delivery-supplier.code-demo-test1" class="attr-list-item">
                                                Test supplier 1<br>
                                                Test company<br>
                                                Test street 1<br>
                                                10000 Test city<br>
                                                NY United States<br>
                                                demo1@example.com</label>
                                            <input class="form-control" type="radio"
                                                id="delivery-supplier.code-demo-test2"
                                                name="c_delivery[1][supplier.code]" value="demo-test2">
                                            <label for="delivery-supplier.code-demo-test2" class="attr-list-item">
                                                Test supplier 2<br>
                                                Test company<br>
                                                Test road 10<br>
                                                20000 Test town<br>
                                                NY United States<br>
                                                demo2@example.com</label>
                                        </div>


                                    </li>

                                </ul>

                            </div>
                        </div>

                        <div id="c_delivery-2" class="item item-service row">

                            <div class="col-sm-6">
                                <label class="description" for="c_deliveryoption-2">

                                    <input class="option" type="radio" id="c_deliveryoption-2" name="c_deliveryoption"
                                        value="2" 1="">



                                    <span class="price-value">
                                        € 5.90</span>



                                    <div class="icons">

                                        <div class="icon">
                                            <!--
--><img src="https://aimeos.org/media/service/dhl.png" srcset="https://aimeos.org/media/service/dhl.png 1w"
                                                alt="Demo: dhl.png" sizes="100vw">
                                            <!--
-->
                                        </div>

                                    </div>

                                    <h2>DHL</h2>

                                    <p class="short">Delivery within three days</p>
                                    <p class="long">The parcel is usually delivered within three working days</p>

                                </label>
                            </div>


                            <div class="col-sm-6">

                            </div>
                        </div>

                        <div id="c_delivery-3" class="item item-service row">

                            <div class="col-sm-6">
                                <label class="description" for="c_deliveryoption-3">

                                    <input class="option" type="radio" id="c_deliveryoption-3" name="c_deliveryoption"
                                        value="3" 1="">



                                    <span class="price-value">
                                        € 11.90</span>



                                    <div class="icons">

                                        <div class="icon">
                                            <!--
--><img src="https://aimeos.org/media/service/dhl-express.png"
                                                srcset="https://aimeos.org/media/service/dhl-express.png 1w"
                                                alt="Demo: dhl-express.png" sizes="100vw">
                                            <!--
-->
                                        </div>

                                    </div>

                                    <h2>DHL Express</h2>

                                    <p class="short">Delivery on the next day</p>
                                    <p class="long">If you order till 16 o'clock the delivery will be on the next
                                        working day</p>

                                </label>
                            </div>


                            <div class="col-sm-6">

                            </div>
                        </div>

                        <div id="c_delivery-4" class="item item-service row">

                            <div class="col-sm-6">
                                <label class="description" for="c_deliveryoption-4">

                                    <input class="option" type="radio" id="c_deliveryoption-4" name="c_deliveryoption"
                                        value="4" 1="">



                                    <span class="price-value">
                                        € 6.90</span>



                                    <div class="icons">

                                        <div class="icon">
                                            <!--
--><img src="https://aimeos.org/media/service/fedex.png" srcset="https://aimeos.org/media/service/fedex.png 1w"
                                                alt="Demo: fedex.png" sizes="100vw">
                                            <!--
-->
                                        </div>

                                    </div>

                                    <h2>Fedex</h2>

                                    <p class="short">Delivery within three days</p>
                                    <p class="long">The parcel is usually delivered within three working days</p>

                                </label>
                            </div>


                            <div class="col-sm-6">

                            </div>
                        </div>

                        <div id="c_delivery-5" class="item item-service row">

                            <div class="col-sm-6">
                                <label class="description" for="c_deliveryoption-5">

                                    <input class="option" type="radio" id="c_deliveryoption-5" name="c_deliveryoption"
                                        value="5" 1="">



                                    <span class="price-value">
                                        € 8.90</span>



                                    <div class="icons">

                                        <div class="icon">
                                            <!--
--><img src="https://aimeos.org/media/service/tnt.png" srcset="https://aimeos.org/media/service/tnt.png 1w"
                                                alt="Demo: tnt.png" sizes="100vw">
                                            <!--
-->
                                        </div>

                                    </div>

                                    <h2>TNT</h2>

                                    <p class="short">Delivery within three days</p>
                                    <p class="long">The parcel is usually delivered within three working days</p>

                                </label>
                            </div>


                            <div class="col-sm-6">

                            </div>
                        </div>



                        <div class="button-group">
                            <a class="btn btn-default btn-lg btn-back" href="/shop/checkout/address">
                                Previous</a>
                            <button class="btn btn-primary btn-lg btn-action">
                                Next</button>
                        </div>

                    </section>
                </form>
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