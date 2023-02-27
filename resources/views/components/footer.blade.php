<link rel="stylesheet" href="{{asset('FrontEnd/Css/main-details.css')}}">

<link rel="stylesheet" href="{{asset('FrontEnd/Css/best-seller.css')}}">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<div class='container d-flex ft' style="padding: 50px 0; background-color:#f0eded">
    <div class="row">
        <div class="col col-12 d-flex col-ft">
            <div class='a' >
                <p>ABOUT US</p>
                <p>We founded Cute Totoro with one simple goal:</p>
                <p>To make you so special and so cute with Totoro.</p>
                <p>Join us if you also love Totoro</p>
                <p>#cutetotoro</p>
            </div>
            <div>
                <img class="line" src="{{ asset('/FrontEnd/Image/Line2.png') }}" alt="" with: 100%
                    height: 100%>
            </div>
            <div class='a'>
                <p>CONTACT US</p>
                <p>Email: &#160;<u>cutetoro.com@gmail.com</u></p>
                <p>Phone: &#160;+1 (740) 291-3866</p>
                <p>Mon - Fri: &#160;08:00 AM to 06:00 PM GMT+9</p>
            </div>
            <div>
                <img class="line" src="{{ asset('/FrontEnd/Image/Line2.png') }}" alt="" with: 100%
                    height: 100%>
            </div>
            <div class='a'>
                <p>INFORMATION</p>
                <div class="list-group" style="list-style: none; padding-left: 0; margin-bottom: 0px">
                    <style>
                        .list-group-item{
                            background: none;
                            border: none;
                            font-size: 16px;
                        }
                    </style>
                    <a class="b list-group-item list-group-item-action" href="/withlist">wishlist</a>
                    <a class="b list-group-item list-group-item-action" href="/about-us">about us</a>
                    <a class="b list-group-item list-group-item-action" href="/contact-us">contact us</a>
                    <a class="b list-group-item list-group-item-action" href="/shipping-policy"> shipping policy</a>
                    <a class="b list-group-item list-group-item-action" href="/terms-of-service">terms of service</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid footer-botom"
    style="padding-top: 30px; padding-bottom: 30px; background-color: #d9d9d9; margin-bottom: -16px;">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-xs-12 col-xl-6">
                <div class="ft-bt-left">
                   <div class="">
                        <ul style="list-style: none; padding-left: 0; margin-bottom: 0px">
                            <style>
                                .ft-bt-left ul::before{
                                    display: none;
                                }
                                .text-uppercase{
                                    font-size: 16px;
                                }
                            </style>
                            <li><a class="text-uppercase" href="/withlist">wishlist</a></li>
                            <li><a class="text-uppercase" href="/about-us">about us</a></li>
                            <li><a class="text-uppercase" href="/contact-us">contact us</a></li>
                            <li><a class="text-uppercase" href="/shipping-policy"> shipping policy</a></li>
                            <li><a class="text-uppercase" href="/terms-of-service">terms of service</a></li>
                        </ul>
                   </div>
                    <p class="d-flex justify-content-center" style="margin-top: 15px; margin-bottom: 0px">copyright 2023
                        © cutetotoro</p>
                </div>
            </div>

            <div class="col col-12 col-xs-12 col-xl-6">
                <div class="ft-bt-right d-flex justify-content-center">
                    <ul style="list-style: none; padding-left: 0px; margin-bottom: 0px">
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-cc-visa"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-cc-paypal"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-cc-stripe"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fa-brands fa-cc-mastercard"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="{{asset('icon_payment/cod.png')}}" alt="cash_on_delivery" height="33.75px" width="30px">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
