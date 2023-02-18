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
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
                <div class="d-flex align-items-center">
                    <img src="{{ asset('FrontEnd/Image/toright.png') }}" alt="toright">
                </div>
            </div>
        </div>

        <div class="element" style="margin-top: 21px;">
            <div class="element-item">
                <div class="mug-product">
                    <img src="{{ asset('FrontEnd/Image/mug/product.png') }}" class="girl img-responsive"
                        alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based
                            on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike>15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
                    <div class="mug-layer">
                        <img src="{{ asset('FrontEnd/Image/mug/frame.png') }}" alt="mug-layer">
                    </div>
                    <div class="mug-sticker">
                        <img src="{{ asset('FrontEnd/Image/heart.png') }}" alt="mug-layer">
                        <img src="{{ asset('FrontEnd/Image/cart0.png') }}" alt="mug-layer">
                    </div>
                </div>
            </div>
            <div class="element-item">
                <div class="mug-product">
                    <img src="{{ asset('FrontEnd/Image/mug/product.png') }}" class="girl img-responsive"
                        alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based
                            on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike>15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
                    <div class="mug-layer">
                        <img src="{{ asset('FrontEnd/Image/mug/frame.png') }}" alt="mug-layer">
                    </div>
                    <div class="mug-sticker">
                        <img src="{{ asset('FrontEnd/Image/heart.png') }}" alt="mug-layer">
                        <img src="{{ asset('FrontEnd/Image/cart0.png') }}" alt="mug-layer">
                    </div>
                </div>
            </div>
            <div class="element-item">
                <div class="mug-product">
                    <img src="{{ asset('FrontEnd/Image/mug/product.png') }}" class="girl img-responsive"
                        alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based
                            on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike>15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
                    <div class="mug-layer">
                        <img src="{{ asset('FrontEnd/Image/mug/frame.png') }}" alt="mug-layer">
                    </div>
                    <div class="mug-sticker">
                        <img src="{{ asset('FrontEnd/Image/heart.png') }}" alt="mug-layer">
                        <img src="{{ asset('FrontEnd/Image/cart0.png') }}" alt="mug-layer">
                    </div>
                </div>
            </div>
            <div class="element-item">
                <div class="mug-product">
                    <img src="{{ asset('FrontEnd/Image/mug/product.png') }}" class="girl img-responsive"
                        alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based
                            on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike>15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
                    <div class="mug-layer">
                        <img src="{{ asset('FrontEnd/Image/mug/frame.png') }}" alt="mug-layer">
                    </div>
                    <div class="mug-sticker">
                        <img src="{{ asset('FrontEnd/Image/heart.png') }}" alt="mug-layer">
                        <img src="{{ asset('FrontEnd/Image/cart0.png') }}" alt="mug-layer">
                    </div>
                </div>
            </div>
            <div class="element-item">
                <div class="mug-product">
                    <img src="{{ asset('FrontEnd/Image/mug/product.png') }}" class="girl img-responsive"
                        alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based
                            on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike>15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
                    <div class="mug-layer">
                        <img src="{{ asset('FrontEnd/Image/mug/frame.png') }}" alt="mug-layer">
                    </div>
                    <div class="mug-sticker">
                        <img src="{{ asset('FrontEnd/Image/heart.png') }}" alt="mug-layer">
                        <img src="{{ asset('FrontEnd/Image/cart0.png') }}" alt="mug-layer">
                    </div>
                </div>
            </div>
            @foreach ($bestSeller as $dt)
                <div class="element-item">
                    <div class="mug-product">
                        <a href="/product-detail/{{ $dt['product.id'] }}">
                            <img src="/aimeos/{{ $dt['media'][0] }}" class="girl img-responsive" alt=""
                                style="width: 232px; height: 239px" />
                            <div class="best_seller_bottom">
                                <span>
                                    {!! $dt['text'][0] !!}
                                </span>
                                <div class="best_seller-price">
                                    <p style="display: flex; align-item: center">
                                        <strike>{{ $dt['price'][0]['actual'] }}$</strike>
                                    </p>
                                    <p>{{ $dt['price'][0]['sale'] }}$</p>
                                </div>
                            </div>
                            <div class="mug-sticker" style="bottom: 150px">
                                <img src="{{ asset('FrontEnd/Image/heart.png') }}" alt="mug-layer">
                                <img src="{{ asset('FrontEnd/Image/cart0.png') }}" alt="mug-layer">
                            </div>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mug-viewed">
            <p>viewed product</p>
            <div class="viewed-product d-flex">
                @foreach ($bestSeller as $dt)
                    <img src="/aimeos/{{ $dt['media'][0] }}" alt="down">
                @endforeach

                <span>View more</span>
            </div>
        </div>
    </div>
    {{-- end content  --}}
    {{-- footer --}}
    <div>
        @include('components.footer')
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
    </script>
</footer>

</html>
