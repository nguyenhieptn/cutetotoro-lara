<!-- Home page -->
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/5bf87cd97a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd/Css/StyleHomePage.css') }}">
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
    <div class="container-fluid Header__First">
        <div class="container d-flex align-items-center" style="height: 100%; position: relative;">
            <div class="d-flex " style="justify-content: space-around">
                <div class="">
                    <a type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                        aria-controls="offcanvasScrolling">
                        <img class="Bar__Tool" src="{{ asset('FrontEnd/Image/bar.png') }}" alt="bar_tool">
                    </a>
                    <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                        id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title content_sidebar" id="offcanvasScrollingLabel">Totoro Shop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <p class="content_sidebar">This is a content Slide Bar</p>
                        </div>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <a class="link" href="/mug">
                        <p class="Mug__CSS">Mug</p>
                    </a>
                    <a class="link" href="/t-shirt">
                        <p class="T__Shirt">T-shirt</p>
                    </a>
                    <a class="link" href="/sticker">
                        <p class="T__Shirt">Sticker</p>
                    </a>
                    <a class="link" href="/poster">
                        <p class="T__Shirt">Poster</p>
                    </a>
                    <a class="link" href="/bag">
                        <p class="T__Shirt">Bag</p>
                    </a>
                    <a class="link" href="/orther">
                        <p class="T__Shirt">Other</p>
                    </a>
                </div>
            </div>
            <div class="logo">
                <a href="/home-page">
                    <img class="Logo_Page" src="{{ asset('FrontEnd/Image/logo_totoro.png') }}" alt="logo_page">
                </a>
            </div>
            <div class="d-flex align-items-center" style="position: absolute; right: 0;">
                <div class="d-flex align-items-center">
                    <input class="rounded-pill Search" type="text" name="Search" placeholder="Search...">
                    <span>
                        <a href="/search-items">
                            <img class="icon_search" src="{{ asset('FrontEnd/Image/search.png') }}">
                        </a>
                    </span>
                </div>
                <div>
                    <p class="cart">Cart/$0.00</p>
                </div>
                <div>
                    <a href="/cart">
                        <img class="cart_shippping" src="{{ asset('FrontEnd/Image/cart.png') }}">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    {{-- content  --}}
    <div class="container">
        <div class="mug-link">
            <p class="d-flex">
                <a href="#">Home </a>
                <span style="margin: 0 10px;">/</span> Mug
            </p>
        </div>
        <div class="mug-banner">
            <img src="{{ asset('FrontEnd/Image/mug/banner.png') }}" alt="banner" style="transform: translateX(-5px);">
        </div>
        <div class="mug-button d-flex justify-content-end">
            <button class="mug-btn">price
                <img src="{{ asset('FrontEnd/Image/down.png') }}" alt="down">
            </button>
            <button class="mug-btn">colors
                <img src="{{ asset('FrontEnd/Image/down.png') }}" alt="down">
            </button>
            <button class="mug-btn">type
                <img src="{{ asset('FrontEnd/Image/down.png') }}" alt="down">
            </button>
            <div class="d-flex align-items-center">
                <img src="{{ asset('FrontEnd/Image/toright.png') }}" alt="toright">
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
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
            <div class="element-item" style="margin-right: 0">
                <div class="mug-product">
                    <img src="{{ asset('FrontEnd/Image/mug/product.png') }}" class="girl img-responsive"
                        alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based
                            on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
                    <div class="mug-sticker">
                        <img src="{{ asset('FrontEnd/Image/heart.png') }}" alt="mug-layer">
                        <img src="{{ asset('FrontEnd/Image/cart0.png') }}" alt="mug-layer">
                    </div>
                </div>
            </div>
            <div class="element-item" style="margin-right: 0">
                <div class="mug-product">
                    <img src="{{ asset('FrontEnd/Image/mug/product.png') }}" class="girl img-responsive"
                        alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based
                            on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
                    <div class="mug-sticker">
                        <img src="{{ asset('FrontEnd/Image/heart.png') }}" alt="mug-layer">
                        <img src="{{ asset('FrontEnd/Image/cart0.png') }}" alt="mug-layer">
                    </div>
                </div>
            </div>
            <div class="element-item" style="margin-right: 0">
                <div class="mug-product">
                    <img src="{{ asset('FrontEnd/Image/mug/product.png') }}" class="girl img-responsive"
                        alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based
                            on Spirited away movie. Coffee Mug
                        </span>
                        <div class="best_seller-price">
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
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
                            <p style="display: flex; align-item: center"><strike
                                    style="line-height: 24px">15,55$</strike></p>
                            <p>14,00$</p>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="element-item" style="margin-right: 0">
                <div class="mug-product">
                    <img src="{{ asset('FrontEnd/Image/mug/product.png') }}" class="girl img-responsive"
                        alt="" />
                    <div class="best_seller_bottom">
                        <span>
                            Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human” Based
                            on Spirited away movie. Coffee Mug
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

        <div class="mug-viewed">
            <p>viewed product</p>
            <div class="viewed-product d-flex">
                <img src="{{ asset('FrontEnd/Image/sale/1_.png') }}" alt="down">
                <img src="{{ asset('FrontEnd/Image/sale/1_.png') }}" alt="down">
                <img src="{{ asset('FrontEnd/Image/sale/1_.png') }}" alt="down">
                <img src="{{ asset('FrontEnd/Image/sale/1_.png') }}" alt="down">
                <img src="{{ asset('FrontEnd/Image/sale/1_.png') }}" alt="down">
                <span>Xem thêm =></span>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script>
        var $element = $('.element').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows'
        });
    </script>
</footer>

</html>
