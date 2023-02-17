<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="0qptXRr7GC7EBB79hFprPydgfPIiBufdRwiV8SuP">
    <meta http-equiv="Content-Security-Policy"
        content="base-uri 'self'; default-src 'self' 'nonce-ExYB1eCaC2dW86TfTYq/aw=='; style-src &#039;unsafe-inline&#039; &#039;self&#039;; img-src &#039;self&#039; data: https://aimeos.org; frame-src https://www.youtube.com https://player.vimeo.com">

    <link type="text/css" rel="stylesheet" href="{{asset('default/app.css?v=1')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('default/aimeos.css?v=1')}}" />

    <title>Payment</title>
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
                                Cart
                            </a>
                        </li>
                        <li class="step address">
                            <a href="/checkout">
                                Checkout
                            </a>
                        </li>
                        <li class="step current payment">
                            Payment
                        </li>
                        <li class="step summary">
                            Summary</li>
                    </ol>
                </nav>
                <form class="container-xxl" method="POST" action="/summary">
                    @csrf
                    <section class="checkout-standard-payment">
                        <h1>Payment</h1>
                        <p class="note">Please choose your payment method</p>
                        <div id="c_payment-8" class="item item-service row">
                            <div class="col-sm-6">
                                <label class="description" for="c_paymentoption-8">
                                    <input class="option" type="radio" id="c_paymentoption-8" name="payment"
                                        value="Paypal" 1>
                                    <div class="icons">
                                        <div class="icon">
                                            <img src="https://aimeos.org/media/service/paypal.png" srcset="https://aimeos.org/media/service/paypal.png 1w"
                                                alt="Demo: paypal.png" sizes="100vw">
                                        </div>
                                    </div>
                                    <h2>PayPal</h2>
                                    <p class="short">Payment via PayPal</p>
                                    <p class="long">Easy and secure payment with your PayPal account</p>
                                </label>
                            </div>
                            <div class="col-sm-6">
                            </div>
                        </div>
                        <div class="button-group">
                            <button class="btn btn-primary btn-lg btn-action" type="submit">
                                Next
                            </button>
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