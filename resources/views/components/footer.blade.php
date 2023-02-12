<!-- <div class="footer footer-details" style="font-family: 'Manjari';">
    <div class="container container-globe footer-top">
        <div class="row">
            <div class="col col-12 col-sm-6 col-lg-4  ft ft-1">
                <div class="ft-top">
                    <h1>
                        ABOUT US
                    </h1>
                    <span>We founded Cute Totoro with one simple goal:
                        To make you so special and so cute with Totoro.
                        Join us if you also love Totoro
                        <br>#cutetotoro
                    </span>
                </div>
            </div>

            <div class="col col-12 col-sm-6 col-lg-4  ft ft-2">
                <div class="ft-top">
                    <h1>
                        CONTACT US
                    </h1>
                    <ul class="ft-contact">
                        <li>
                            <p>Email: cutetoro.@gmail.com</p>
                        </li>
                        <li>
                            <p> Phone: +1 (740) 291-3866</p>
                        </li>
                        <li>
                            <p>Mon - Fri: 08:00 AM to 06:00 PM GMT+9</p>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col col-12 col-sm-12 col-lg-4 ft ft-3">
                <div class="ft-top">
                    <h1>
                        INFORMATION
                    </h1>
                    <ul class="ft-if">
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Shipping us</a></li>
                        <li><a href="#">Terms of Service</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid footer-botom" style="padding-top: 30px; padding-bottom: 30px; background-color: #d9d9d9; margin-top: 30px" >
        <div class="container">
            <div class="row">
                <div class="col col-12 col-xs-12 col-xl-6">
                    <div class="ft-bt-left">
                        <ul style="list-style: none; padding-left: 0; margin-bottom: 0px">
                            <li><a href="#">wishlist</a></li>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">contact us</a></li>
                            <li><a href="#"> shipping policy</a></li>
                            <li><a href="#">terms of service</a></li>
                        </ul>
                        <p class="d-flex justify-content-center" style="margin-top: 15px; margin-bottom: 0px">copyright 2016 © cutetotoro</p>
                    </div>
                </div>

                <div class="col col-12 col-xs-12 col-xl-6">
                    <div class="ft-bt-right d-flex justify-content-center">
                        <p style="margin-bottom: 0px">Contact with us:</p>
                        <ul style="list-style: none; padding-left: 0px; margin-bottom: 0px">
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
 -->
 <link rel="stylesheet" href="{{ asset('FrontEnd/Css/main-details.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<style>
.a {
    padding-right: 8rem;
}

.a p {
    font-family: 'Manjari';
    font-style: normal;
    font-weight: 700;
    font-size: 15px;
    line-height: 18px;
    justify-content: center;
    color: #000000;
}

.b {
    font-family: 'Manjari';
    font-style: normal;
    font-weight: 700;
    font-size: 15px;
    line-height: 18px;
    justify-content: center;
    color: #000000;
    text-decoration: underline;
}

@media screen and (min-width: 601px) {
    .ft1 {
        display: none;
    }
}

@media screen and (max-width: 600px) {
    .ft {
        display: none;
    }
}
</style>
<div class='container d-flex ft'>
    <div class='a'>
        <p>ABOUT US</p>
        <p>We founded Cute Totoro with one simple goal:</p>
        <p>To make you so special and so cute with Totoro.</p>
        <p>Join us if you also love Totoro</p>
        <p>#cutetotoro</p>
    </div>
    <div>
        <img style='padding-right: 4rem' src="{{asset('/FrontEnd/Image/Line2.png')}}" alt="" with: 100% height: 100%>
    </div>
    <div class='a'>
        <p>CONTACT US</p>
        <p>Email: <a href="#" style="font-family: 'Manjari';
font-style: normal;
font-weight: 700;
font-size: 15px;
line-height: 18px;ll
justify-content: center;
color: #000000;">cutetoro.com@gmail.com</a></p>
        <p>Phone: +1 (740) 291-3866</p>
        <p>Mon - Fri: 08:00 AM to 06:00 PM GMT+9</p>
    </div>
    <div>
        <img style='padding-right: 4rem' src="{{asset('/FrontEnd/Image/Line2.png')}}" alt="" with: 100% height: 100%>
    </div>
    <div class='a'>
        <p>INFORMATION</p>
        <ul>
            <li class='b'>Wishlist</li>
            <li class='b'>About us</li>
            <li class='b'>Contact us</li>
            <li class='b'>Shipping Policy</li>
            <li class='b'>Terms of Service</li>
        </ul>
    </div>
</div>
<div class="container-fluid footer-botom" style="padding-top: 30px; padding-bottom: 30px; background-color: #d9d9d9; margin-top: 30px" >
        <div class="container">
            <div class="row">
                <div class="col col-12 col-xs-12 col-xl-6">
                    <div class="ft-bt-left">
                        <ul style="list-style: none; padding-left: 0; margin-bottom: 0px">
                            <li><a href="#">wishlist</a></li>
                            <li><a href="#">about us</a></li>
                            <li><a href="#">contact us</a></li>
                            <li><a href="#"> shipping policy</a></li>
                            <li><a href="#">terms of service</a></li>
                        </ul>
                        <p class="d-flex justify-content-center" style="margin-top: 15px; margin-bottom: 0px">copyright 2016 © cutetotoro</p>
                    </div>
                </div>

                <div class="col col-12 col-xs-12 col-xl-6">
                    <div class="ft-bt-right d-flex justify-content-center">
                        <p style="margin-bottom: 0px">Contact with us:</p>
                        <ul style="list-style: none; padding-left: 0px; margin-bottom: 0px">
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-telegram"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>