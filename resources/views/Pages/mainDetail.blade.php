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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <div class="detail-content" style="margin-top: 80px">
        <div class="container">
            <div class="row mb-5">
                <div class=" col col-12 breadcrumb-main-details">
                    <p class="d-flex">
                        <a href="/">Home </a>
                        <span style="margin: 0 10px;">/</span>
                        <?php
                        $name = Session::get('name');
                        $link = Session::get('link');
                        $sale = $infoAll->value - $infoAll->rebate;
                        echo $name;
                        ?>
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col col-12 col-xl-8">
                    <div class="row d-flex">
                        <div class="col col-12 col-xl-2 detail-son">
                            <div class="row main-detail-sb">

                                <div class="col col-3 col-xl-12 detail-sb">
                                    <div class="detail-sb-wr">
                                        <img style="width: 100%; height: 100%" src="/aimeos/{{ $link }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-12 col-xl-10 detail-dad">
                            <div class="main-detail-image" style="width: 100%">
                                <img style="width: 100% ; height: 100%" src="/aimeos/{{ $link }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-xl-4 pt-3">

                    <div class="main-details-content-wrap">
                        <form>
                            @csrf
                            <input type="hidden" value="{{ $infoAll->parentid }}"
                                class="cart_product_id_{{ $infoAll->parentid }}">
                            <input type="hidden" value="{{ $infoAll->label }}"
                                class="cart_product_name_{{ $infoAll->parentid }}">
                            <input type="hidden" value="{{ $link }}"
                                class="cart_product_image_{{ $infoAll->parentid }}">
                            <input type="hidden" value="{{ $sale }}"
                                class="cart_product_price_{{ $infoAll->parentid }}">
                            <input type="hidden" value="1" class="cart_product_qty_{{ $infoAll->parentid }}">
                            <ul class="main-details-content mb-0">
                                {{-- <li>
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
                                    </li> --}}
                                <li>
                                    <p>{{ $infoAll->label }}</p>
                                </li>
                                <li style="margin-top: 30px">
                                    <span style="margin-bottom: 10px; display: block ">Only 2 left in stock</span>
                                    <span>
                                        {!! $infoAll->content !!}
                                    </span>
                                </li>
                                <li style="margin-top: 35px">
                                    <ul class="md-price d-flex">
                                        <li style="margin-right: 20px">
                                            <span>{{ $sale }}$</span>
                                        </li>
                                        <li>
                                            <span style="font-weight: 400; font-size: 30px; line-height: 33px;"><strike>{{ $infoAll->value }}
                                                    $</strike></span>
                                        </li>
                                    </ul>
                                </li>
                                <li style="margin-top: 30px">
                                    <button type="button" class="btn btn-default add-to-cart" name="add-to-cart"
                                        data-id_product="{{ $infoAll->parentid }}">Thêm vào đơn hàng</button>
                                    <script src="{{ asset('js/sweetalert.min.js') }}"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $('.add-to-cart').click(function() {
                                                swal({
                                                        title: "Đã thêm món ăn vào đơn hàng",
                                                        text: "Bạn có thể chọn món tiếp hoặc tới đơn hàng để tiến hành thanh toán",
                                                        showCancelButton: true,
                                                        cancelButtonText: "Xem tiếp",
                                                        confirmButtonClass: "btn-success",
                                                        confirmButtonText: "Đi đến đơn hàng hàng",
                                                        closeOnConfirm: false
                                                    },
                                                    function() {
                                                        window.location.href = "{{ url('/cart') }}";
                                                    }
                                                );
                                            })
                                        })
                                    </script>
                                </li>
                                {{-- <li style="margin-top: 35px">
                                        <p>Star Seller. This seller consistently earned 5-star reviews, shipped on time, and
                                            replied quickly to any messages they received.
                                            <br>

                                            Arrives by Feb 8-14 if you order today.
                                        </p>
                                    </li> --}}
                            </ul>
                        </form>
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
                        <p class="pt-0">{!! $infoAll->content !!}</p>
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
    @include('components.footer')
</body>

</html>
