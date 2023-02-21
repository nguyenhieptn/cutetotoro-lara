<!-- Home page -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/5bf87cd97a.js" crossorigin="anonymous"></script>
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd/Css/StyleHomePage.css') }}"> --}}
    <!-- font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manjari:wght@100;700&display=swap" rel="stylesheet">
    <title>Cute Totoro</title>
    <link rel="stylesheet" href="{{ asset('FrontEnd/Css/best-seller.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- header -->
    @include('cutetotoro::layouts.head')
    <!-- end header -->

    {{-- content  --}}
    <div class="container">
        <div class="mug-link">
            <p class="d-flex">
                <a href="/">Home </a>
                <span style="margin: 0 10px;">/</span>Product
            </p>
        </div>
        <div class="row">
            <div class="mug-banner">
                <img src="{{ asset('FrontEnd/Image/mug/banner.png') }}" alt="banner" style="width: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="mug-button d-flex justify-content-end dropdown">
                <button type="button" class="mug-btn " data-bs-toggle="dropdown" aria-expanded="false">price
                    <img src="{{ asset('FrontEnd/Image/down.png') }}" alt="down">
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                <button type="button" class="mug-btn " data-bs-toggle="dropdown"
                    aria-expanded="false">colors
                    <img src="{{ asset('FrontEnd/Image/down.png') }}" alt="down">
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                <button type="button" class="mug-btn " data-bs-toggle="dropdown" aria-expanded="false">type
                    <img src="{{ asset('FrontEnd/Image/down.png') }}" alt="down">
                </button>
                <ul id="filters" class="dropdown-menu button-group">
                    <li><button class=" dropdown-item button is-checked" style="height: fit-content; padding: 5px 0px; background-image: none" data-filter="*">all</button></li>
                    <li><button class=" dropdown-item button" style="height: fit-content; padding: 5px 0px; background-image: none" data-filter=".Mug">mug</button></li>
                    <li><button class=" dropdown-item button" style="height: fit-content; padding: 5px 0px; background-image: none" data-filter=".Poster">poster</button></li>
                    <li><button class=" dropdown-item button" style="height: fit-content; padding: 5px 0px; background-image: none" data-filter=".T-shirt">t-shirt</button></li>
                    <li><button class=" dropdown-item button" style="height: fit-content; padding: 5px 0px; background-image: none" data-filter=".Sticker">sticker</button></li>
                    <li><button class=" dropdown-item button" style="height: fit-content; padding: 5px 0px; background-image: none" data-filter=".Other">other</button></li>
                </ul>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('FrontEnd/Image/toright.png') }}" alt="toright">
                </div>
            </div>
        </div>

        <div class="element" style="margin-top: 81px;">

            @foreach ($bestSeller as $key => $dt)
                <div class="element-item {{ $dt['product.label'] }}">
                    <div class="mug-product">
                        <a href="{{ route('product.detail',$dt['product.id'] ) }}" style="display: block">
                            <div class="mug-img">
                                <img src="/aimeos/{{ $dt['media'][0] }}" class="girl img-responsive" alt=""/>
                                <div class="mug-sticker" >
                                    <img src="{{ asset('FrontEnd/Image/heart.png') }}" alt="mug-layer">
                                    <img src="{{ asset('FrontEnd/Image/cart0.png') }}" alt="mug-layer">
                                </div>
                                @if ($key < 5)
                                    <div class="mug-layer">
                                        <img src="{{ asset('FrontEnd/Image/mug/frame.png') }}" alt="mug-layer">
                                    </div>
                                @endif
                            </div>
                            <div class="best_seller_bottom">
                                <span>
                                    {!! $dt['text'][0] !!}
                                </span>
                                <div class="best_seller-price">
                                    <p style="display: flex; align-item: center; margin-right: 15px">
                                        <strike>{{ $dt['price'][0]['actual'] }}$</strike>
                                    </p>
                                    <p>{{ $dt['price'][0]['actual'] - $dt['price'][0]['rebate'] }}$</p>
                                </div>
                            </div>

                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mug-viewed">
            <p>viewed product</p>
            <div class="viewed-product d-flex">
                <div class="main-carousel main-carousel-allproduct"  data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true}'>
                    @php
                    $sale_product = array_slice($bestSeller, 0, 10);
                    @endphp
                    @foreach($sale_product as  $dt)
                        <div class="carousel-cell" style="position: relative">
                            <img style="width: 100%; height: 100%" src="/aimeos/{{ $dt['media'][0] }}" class="girl" alt="" />
                        </div>
                        {{-- <div class="carousel-cell" style="position: relative">
                            <span>hfghf</span>
                        </div> --}}
                    @endforeach
                </div>
                {{-- @php
                $sale_product = array_slice($bestSeller, 0, 5);
                @endphp
                @foreach ($sale_product as $dt)
                    <img src="/aimeos/{{ $dt['media'][0] }}" alt="down"> --}}
           

                <span>View more</span>
            </div>
        </div>
    </div>
    {{-- end content  --}}
    {{-- footer --}}
    <div class="footer_desktop" style="background-color: #f0eded">
        @include('components.footer')
        
    </div>
    <style>
        @media screen and (min-width: 769px) {
            .footer_mobile {
                display: none;
            }
    
            .ft_mobile {
                display: none;
            }
        }
    
        @media screen and (max-width: 768px) {
            .footer_desktop {
                display: none;
            }
        }
    
        .footer_mobile p {
            font-family: 'Manjari';
            font-style: normal;
            font-weight: 700;
            font-size: 15px;
            line-height: 18px;
            color: #000000;
            text-align: center;
    
        }
    
        .titel_ft {
            text-align: center;
        }
    
        .list {
            font-family: 'Manjari';
            font-style: normal;
            font-weight: 700;
            font-size: 15px;
            line-height: 18px;
            justify-content: center;
            color: #000000;
            text-decoration: underline;
        }
    </style>
    <div class="footer_mobile" style="background-color: #f0eded; padding: 50px 0">
        <div class='container'>
            <div>
                <p class="titel_ft">ABOUT US</p>
                <p>We founded Cute Totoro with one simple goal:</p>
                <p>To make you so special and so cute with Totoro.</p>
                <p>Join us if you also love Totoro</p>
                <p>#cutetotoro</p>
            </div>
            <br>
            <div>
                <p class="titel_ft">CONTACT US</p>
                <p>Email: <a href="#"
                        style="font-family: 'Manjari';font-style: normal;font-weight: 700;font-size: 15px;line-height: 18px;justify-content: center;color: #000000;">cutetoro.com@gmail.com</a>
                </p>
                <p>Phone: +1 (740) 291-3866</p>
                <p>Mon - Fri: 08:00 AM to 06:00 PM GMT+9</p>
            </div>
            <br>
            <div>
                <p class="titel_ft">INFORMATION</p>
                <div>
                    <p class="list">Wishplist</p>
                    <p class="list">About us</p>
                    <p class="list">Contact us</p>
                    <p class="list">Shipping Poplicy</p>
                    <p style="margin-bottom: 0" class="list">Terms of Service</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container-fluid ft_mobile" style="color: #a4a4a4; background-color: #a4a4a4; padding-top: 30px">
        <style>
            .ft_list {
                font-family: 'Manjari';
                font-style: normal;
                font-weight: 700;
                font-size: 18px;
                line-height: 21px;
                text-align: center;
                text-decoration-line: underline;
                text-transform: lowercase;
                color: #000000;
            }
    
            .ft_list_cp {
                font-family: 'Manjari';
                font-style: normal;
                font-weight: 700;
                font-size: 18px;
                line-height: 21px;
                text-align: center;
                text-transform: lowercase;
                color: #000000;
                align-items: center;
            }
    
            .text-center1 {
                font-family: 'Manjari';
                font-style: normal;
                font-weight: 700;
                font-size: 18px;
                line-height: 21px;
                text-align: center;
                text-transform: lowercase;
                color: #000000;
                align-items: center;
                justify-content: center;
            }
    
            .ft_list_cp{
                margin-bottom: 0px
            }
    
            .ft-ul-mb >li{
                padding: 0 7px
            }
    
            .ft_list_cpu {
                position: relative;
            }
    
            .ft_list_cpu::before{
                position: absolute;
                content: "";
                width: 1px;
                height: 80%;
                top: 0;
                right: 0;
                background-color: black
            }
        </style>
        <div class="text-center" style="margin-bottom: 10px">
            <a href="" class="ft_list">WISHLIST</a>
            <a href="" class="ft_list">ABOUT US</a>
            <a href="" class="ft_list">CONTACT US</a>
            <a href="" class="ft_list">SHIPPING</a>
            <a href="" class="ft_list">POLICY</a>
            <a href="" class="ft_list">TERMS OF SERVICE</a>
        </div>
        <div class="text-center1 d-flex" style="margin-bottom: 3px">
            <p class="ft_list_cp ft_list_cpu" style="padding-right: 1rem">Contact</p>
            {{-- <img src="{{ asset('/FrontEnd/Image/Line4.png') }}" alt="" style="height: 34px;padding-bottom: 1rem;"> --}}
            <p class="ft_list_cp ft_list_cpu" style="padding-left: 1rem; padding-right: 1rem">About</p>
            <ul class=ft-ul-mb style="list-style: none; padding-left: 0px; margin-bottom: 0px; margin-left: 10px; display: flex">
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
        <div class="text-center">
            <p class="ft_list_cp">Copyright 2023 © Cutetotoro</p>
        </div>
    </div>
    
    {{-- end-footer --}}
</body>
<footer>
    <!-- footer page -->

    <!-- script -->

    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script>
        var $element = $('.element').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows'
        });
        $('#filters').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            // use filterFn if matches value
            // filterValue = filterFns[filterValue] || filterValue;
            $element.isotope({
                filter: filterValue
            });
        });
        $('.button-group').each(function(i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);

            $buttonGroup.on('click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $(this).addClass('is-checked');
            });
        });
    </script>
</footer>

</html>
