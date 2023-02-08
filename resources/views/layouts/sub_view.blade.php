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

    {{-- long-css --}}
    <link rel="stylesheet" href="{{ asset('FrontEnd/Css/best-seller.css') }}">
    <link rel="stylesheet" href="{{ asset('FrontEnd/Css/main-details.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Cute Totoro</title>

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

    {{-- details-product --}}
    <div class="detail-content" style="margin-top: 80px">
        <div class="container">
            <div class="row mb-5">
                <div class=" col col-12 breadcrumb">
                    <p class="d-flex">
                        <a href="#">Home </a>
                        <span style="margin: 0 10px;">/</span> Mug
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col col-12 col-xl-8">
                    <div class="row">
                        <div class="col col-12 col-xl-2">
                            <div class="row main-detail-sb">
                                <div class="col col-3 col-xl-12 detail-sb">
                                    <div class="detail-sb-wr" style="min-width: 110px; height: 110px">
                                        <img style="width: 100%; height: 100%"
                                            src="{{ asset('FrontEnd/Image/Rectangle 10.png') }}" alt="">
                                    </div>
                                </div>

                                <div class="col col-3 col-xl-12 detail-sb">
                                    <div class="detail-sb-wr" style="min-width: 110px; height: 110px">
                                        <img style="width: 100%; height: 100%"
                                            src="{{ asset('FrontEnd/Image/Rectangle 10.png') }}" alt="">
                                    </div>
                                </div>

                                <div class="col col-3 col-xl-12 detail-sb">
                                    <div class="detail-sb-wr" style="min-width: 110px; height: 110px">
                                        <img style="width: 100%; height: 100%"
                                            src="{{ asset('FrontEnd/Image/Rectangle 10.png') }}" alt="">
                                    </div>
                                </div>

                                <div class="col col-3 col-xl-12 detail-sb">
                                    <div class="detail-sb-wr" style="min-width: 110px; height: 110px">
                                        <img style="width: 100%; height: 100%"
                                            src="{{ asset('FrontEnd/Image/Rectangle 10.png') }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-12 col-xl-10">
                            <div class="main-detail-image" style="width: 100%">
                                <img style="width: 100% ; height: 100%"
                                    src="{{ asset('FrontEnd/Image/hehehe.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-xl-4 pt-3">
                    <div class="main-details-content-wrap">
                        <ul class="main-details-content mb-0">
                            <li>
                                <ul class="md-assets">
                                    <li>
                                        <p>Star Seller</p>
                                    </li>
                                    <li class="d-flex">
                                        <p style="margin-right: 10px">55 sales </p>
                                        <img style="width: 86px; height: 20px"
                                            src="{{ asset('FrontEnd/Image/start-pro.png') }}" alt="">
                                    </li>
                                </ul>
                            </li>
                            <li style="margin-top: 30px">
                                <span style="margin-bottom: 10px; display: block ">Only 2 left in stock</span>
                                <span>Spirited away Soot Sprite Character Mug, with quote: “Finish what you
                                    started Human” Based on Spirited away movie. Coffee Mug
                                </span>
                            </li>
                            <li style="margin-top: 35px">
                                <ul class="md-price d-flex">
                                    <li style="margin-right: 20px">
                                        <span>14,00$</span>
                                    </li>
                                    <li>
                                        <span style="font-weight: 400; font-size: 30px; line-height: 33px;"><strike>15,99
                                                $</strike></span>
                                    </li>
                                </ul>
                            </li>
                            <li style="margin-top: 30px">
                                <button
                                    style="border: none; width: 100%; border-radius: 20px; padding: 10px 0 5px 0; background-color: #363636">
                                    <p style="display: flex; justify-content: center;color: white;">Add to cart</p>
                                </button>
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
                        <p class="pt-0">Add a detailed description of the demo article that may be a little bit
                            longer.</p>
                    </div>

                    <div id="Paris" class="city tab-content" style="display:none">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, consequatesse cillum dolore eu
                            fugiat nulla pariat laborum.</p>
                    </div>
                </div>
            </div>

            <div class="row ">
                <div class="col col-12 pb-3" style="border-bottom: 3px solid #000000 ">
                    <p style="margin-bottom: 0">May you also like</p>
                </div>
            </div>

            <div class="row mt-5 detail-also-like">
                <div class="main-carousel"
                    data-flickity='{ "cellAlign": "left", "contain": true, "wrapAround": true, "adaptiveHeight": true}'>
                    {{-- "autoPlay": 3000 --}}
                    <div class="carousel-cell" style="position: relative">
                        <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 10.png') }}"
                            class="girl img-responsive" alt="" />
                        <div class="best_seller_bottom">
                            <span>
                                Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human”
                                Based on Spirited away movie. Coffee Mug
                            </span>
                            <div class="best_seller-price">
                                <p style="display: flex; align-item: center"><strike
                                        style="line-height: 24px">15,55$</strike></p>
                                <p>14,00$</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell" style="position: relative">
                        <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 11.png') }}"
                            class="girl img-responsive" alt="" />
                        <div class="best_seller_bottom">
                            <span>
                                Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human”
                                Based on Spirited away movie. Coffee Mug
                            </span>
                            <div class="best_seller-price">
                                <p style="display: flex; align-item: center"><strike
                                        style="line-height: 24px">15,55$</strike></p>
                                <p>14,00$</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell" style="position: relative">
                        <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 12.png') }}"
                            class="girl img-responsive" alt="" />
                        <div class="best_seller_bottom">
                            <span>
                                Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human”
                                Based on Spirited away movie. Coffee Mug
                            </span>
                            <div class="best_seller-price">
                                <p style="display: flex; align-item: center"><strike
                                        style="line-height: 24px">15,55$</strike></p>
                                <p>14,00$</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell" style="position: relative">
                        <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 13.png') }}"
                            class="girl img-responsive" alt="" />
                        <div class="best_seller_bottom">
                            <span>
                                Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human”
                                Based on Spirited away movie. Coffee Mug
                            </span>
                            <div class="best_seller-price">
                                <p style="display: flex; align-item: center"><strike
                                        style="line-height: 24px">15,55$</strike></p>
                                <p>14,00$</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell" style="position: relative">
                        <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 14.png') }}"
                            class="girl img-responsive" alt="" />
                        <div class="best_seller_bottom">
                            <span>
                                Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human”
                                Based on Spirited away movie. Coffee Mug
                            </span>
                            <div class="best_seller-price">
                                <p style="display: flex; align-item: center"><strike
                                        style="line-height: 24px">15,55$</strike></p>
                                <p>14,00$</p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-cell" style="position: relative">
                        <img style="width: 100%" src="{{ asset('FrontEnd/Image/Rectangle 10.png') }}"
                            class="girl img-responsive" alt="" />
                        <div class="best_seller_bottom">
                            <span>
                                Spirited away Soot Sprite Character Mug, with quote: “Finish what you started Human”
                                Based on Spirited away movie. Coffee Mug
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
        </div>
    </div>
    {{-- details-product-end --}}

    {{-- footer --}}
    @include('components.footer')
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
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            layoutMode: 'fitRows'
        });
    </script>

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
</footer>

</html>

