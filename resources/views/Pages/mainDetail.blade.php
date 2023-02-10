
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
                                        <img style="width: 100%; height: 100%"
                                            src="/aimeos/{{$link}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col col-12 col-xl-10 detail-dad">
                            <div class="main-detail-image" style="width: 100%">
                                <img style="width: 100% ; height: 100%" src="/aimeos/{{$link}}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col col-12 col-xl-4 pt-3">
                    <div class="main-details-content-wrap">
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
                                <p>{{$infoAll->label}}</p>
                            </li>
                            <li style="margin-top: 30px">
                                <span style="margin-bottom: 10px; display: block ">Only 2 left in stock</span>
                                <span>
                                    {!!$infoAll->content!!}
                                </span>
                            </li>
                            <li style="margin-top: 35px">
                                <ul class="md-price d-flex">
                                    <li style="margin-right: 20px">
                                        <span>{{$sale}}$</span>
                                    </li>
                                    <li>
                                        <span style="font-weight: 400; font-size: 30px; line-height: 33px;"><strike>{{$infoAll->value}}
                                                $</strike></span>
                                    </li>
                                </ul>
                            </li>
                            <li style="margin-top: 30px">
                                <button style="font-family: 'Manjari'; font-style: normal; font-weight: 700; font-size: 16px; color: #ffff; background: grey" type="button" class="btn " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Add to cart
                                </button>
                                <div style="with: 100%" class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: none; padding-left: 14px;">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Cart</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" >
                                           
                                            <table class="table" style="font-family: 'Manjari';
                                            font-style: normal;
                                            font-weight: 700;
                                            font-size: 16px;
                                            
                                            color: #000000;
                                            ">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">STT</th>
                                                    <th scope="col">Name Product</th>
                                                    <th scope="col">Image</th>
                                                    <th scope="col">Quantity</th>
                                                    <th scope="col">Price</th>
                                                    <th scope="col">Sum</th>
                                                    <th></th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>1</td>
                                                    <td>Mug Cute</td>
                                                    <td>
                                                        <img src="https://drive.google.com/uc?export=view&id=1Ii4kOkwDhzWr8Fhz2CSwCw43Yzs_GfPV" alt="">
                                                    </td>
                                                    <td>
                                                        <input class="value" type="number" required="required" name="b_prod[0][quantity]" value="6" step="1" min="1" max="2147483647">
                                                    </td>
                                                    <td>

                                                        10000$
                                                    </td>
                                                    <td>
                                                        10000$
                                                    </td>
                                                    <td>
                                                        <i class="fa-solid fa-trash-can"></i>
                                                    </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                                <div class="subtotal row g-0" style="font-family: 'Manjari'; font-style: normal; font-weight: 700; font-size: 16px; color: #000000;">
                                                    <div class="col-8 col-md-6 offset-4 offset-md-6">
                                                        <div class="row g-0">
                                                            <div class="col-8">Sub-total</div>
                                                            <div class="price col-3">$ 100.00</div>
                                                            <div class="action col-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="delivery row g-0" style="font-family: 'Manjari'; font-style: normal; font-weight: 700; font-size: 16px; color: #000000;">
                                                    <div class="col-8 col-md-6 offset-4 offset-md-6">
                                                        <div class="row g-0">
                                                            <div class="col-8">Shipping</div>
                                                            <div class="price col-3">$ 5.00</div>
                                                            <div class="action col-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tax row g-0" style="font-family: 'Manjari'; font-style: normal; font-weight: 700; font-size: 16px; color: #000000;">
                                                    <div class="col-8 col-md-6 offset-4 offset-md-6">
                                                        <div class="row g-0">
                                                            <div class="col-8">Incl. 20.00% tax</div>
                                                            <div class="price col-3">€ 122.50</div>
                                                            <div class="action col-1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="basket-standard-coupon" style="font-family: 'Manjari'; font-style: normal; font-weight: 700; font-size: 16px; color: #000000;">
                                                    <div class="header">
                                                        <h2 style="font-family: 'Manjari'; font-style: normal; font-weight: 700; font-size: 16px; color: #000000;">Coupon codes</h2>
                                                    </div>
                                                    <div class="content">
                                                        <div class="input-group coupon-new" style="font-family: 'Manjari'; font-style: normal; font-weight: 700; font-size: 16px; color: #000000;">
                                                            <input style="font-family: 'Manjari'; font-style: normal; font-weight: 700; font-size: 16px; color: #000000;" class="form-control coupon-code" type="text" maxlength="255" placeholder="Coupon codes" name="b_coupon">
                                                            <button class="btn btn-primary" type="submit">Apply</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <style>
                                                    .coupon-code::placeholder{
                                                        font-family: 'Manjari'; font-style: normal; font-weight: 300; font-size: 16px; color: #000000;
                                                    }
                                                    .basket-standard-coupon {
                                                        padding: 1rem !important;
                                                        text-align: center;
                                                        margin: 0;
                                                    }
                                                    .basket-standard-coupon .header, .basket-standard-coupon .content {
                                                        vertical-align: middle;
                                                        display: inline-block;
                                                        width: 49%;
                                                    }
                                                    .basket-standard-coupon .header h2 {
                                                        font-size: 1rem;
                                                        margin: 10px 0;
                                                    }
                                                    .basket-standard-coupon .input-group {
                                                        border-bottom: 1px solid var(--ai-secondary);
                                                    }
                                                    .input-group {
                                                        position: relative;
                                                        display: flex;
                                                        flex-wrap: wrap;
                                                        align-items: stretch;
                                                        width: 100%;
                                                    }
                                                    .input-group:not(.has-validation)>:not(:last-child):not(.dropdown-toggle):not(.dropdown-menu):not(.form-floating) {
                                                        border-top-right-radius: 0;
                                                        border-bottom-right-radius: 0;
                                                    }
                                                    .basket-standard-coupon .coupon-new .coupon-code {
                                                        width: calc(100% - 5rem);
                                                        border: none;
                                                    }
                                                    .basket-standard-coupon .coupon-new .btn {
                                                        width: 5rem;
                                                    }
                                                    .basket-standard-coupon .btn-primary, .basket-standard-coupon .btn-primary:hover {
                                                        background: none;
                                                        border: none;
                                                        color: var(--ai-primary);
                                                        font-weight: bold;
                                                        font-size: 125%;
                                                    }
                                                </style>
                                        </div>
                                        <div class="modal-footer" style="justify-content: center">
                                            <button style="font-family: 'Manjari'; font-style: normal; font-weight: 700; font-size: 16px; color: #000000;" type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button style="font-family: 'Manjari'; font-style: normal; font-weight: 700; font-size: 16px; color: #ffffff;" type="button" class="btn btn-primary">
                                            <a href="/checkout">Checkout</a>
                                            </button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            {{-- <li style="margin-top: 35px">
                                <p>Star Seller. This seller consistently earned 5-star reviews, shipped on time, and
                                    replied quickly to any messages they received.
                                    <br>

                                    Arrives by Feb 8-14 if you order today.
                                </p>
                            </li> --}}
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
    {{-- details-product-end --}}

    {{-- footer --}}
    @include('components.footer')
    {{-- end-footer --}}

</body>

</html>
