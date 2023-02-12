<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="mR8HsEtio3RkDJKMPJX3UgaWVNSBoWvCRCBEdt4Y">

    <meta http-equiv="Content-Security-Policy"
        content="base-uri 'self'; default-src 'self' 'nonce-yOWAR3gr1xA+Hl4FHFgOGQ=='; style-src &#039;unsafe-inline&#039; &#039;self&#039;; img-src &#039;self&#039; data: https://aimeos.org; frame-src https://www.youtube.com https://player.vimeo.com">

    <link type="text/css" rel="stylesheet"
        href="{{asset('/default/app.css?v=1')}}">
    <link type="text/css" rel="stylesheet"
        href="{{asset('/default/aimeos.css?v=1')}}" />

    <title>Basket</title>
    <link rel="stylesheet" href="{{asset('/default/locale-select.css?v=1')}}">
    <script defer src="{{asset('/default/locale-select.js?v=1')}}"></script>
    <script defer src="/shop/count"></script>

    <link rel="stylesheet" href="{{asset('/default/catalog-filter.css?v=1')}}">
    <script defer src="{{asset('/default/catalog-filter.js?v=1')}}"></script>
    <link rel="stylesheet" href="{{asset('/default/basket-bulk.css?v=1')}}">
    <script defer src="{{asset('/default/basket-bulk.js?v=1')}}"></script>
    <title>Basket | Default</title>

    <link class="basket-standard" rel="stylesheet"
        href="{{asset('/default/summary.css?v=1')}}">
    <link class="basket-standard" rel="stylesheet"
        href="{{asset('/default/basket-standard.css?v=1')}}">
    <script defer class="basket-standard"
        src="{{asset('/default/basket-standard.js?v=1')}}"></script>
    <link rel="stylesheet" href="{{asset('/default/basket-related.css?v=1')}}">
    <script defer src="{{asset('/default/basket-related.js?v=1')}}"></script>

    <style nonce="yOWAR3gr1xA+Hl4FHFgOGQ==">
        :root {}
    </style>

    <link rel="icon" href="https://laravel.demo.aimeos.org/aimeos/../vendor/shop/themes/default/assets/icon.png" />

    <link rel="preload" href="/vendor/shop/themes/default/assets/roboto-condensed-v19-latin-regular.woff2"
        as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="/vendor/shop/themes/default/assets/roboto-condensed-v19-latin-700.woff2" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="/vendor/shop/themes/default/assets/bootstrap-icons.woff2" as="font"
        type="font/woff2" crossorigin>
</head>

<body class="page-basket-index">
    <div class="content">
        <div class="container-fluid">
            <section class="aimeos basket-standard" data-jsonurl="https://laravel.demo.aimeos.org/jsonapi">
                <div class="container-xxl">
                    <form>
                        <div class="row header">
                            <h1 class="col-12 col-sm-6">Cart Product</h1>
                        </div>
                        <div class="common-summary-detail">
                            <div class="header">
                                <h2>Details</h2>
                            </div>
                            <div class="basket">
                                <div>
                                    <div class="row g-0 headline">
                                        <div class="col-8 col-md-6 offset-4 offset-md-6">
                                            <div class="row g-0">
                                                <div class="col-4 quantity">Quantity</div>
                                                <div class="col-4 unitprice">Price</div>
                                                <div class="col-3 price">Sum</div>
                                                <div class="action col-1"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="supplier">
                                        <h3 class="supplier-name">Default</h3>
                                    </div>
                                    <div class="row g-0 product-item ">
                                        <div class="col-4 col-md-6">
                                            <div class="row g-0">
                                                <div class="status col-1">
                                                </div>
                                                <div class="image col-11 col-lg-3">
                                                    {{-- <img class="detail"
                                                        src="https://aimeos.org/media/default/product_01_A-low.webp"> --}}
                                                </div>
                                                <div class="details col-12 col-lg-8">
                                                    {{-- <a class="product-name"
                                                        href="https://laravel.demo.aimeos.org/shop/demo-article//1">Demo
                                                        article</a>
                                                    <p class="code">
                                                        <span class="name">Article no.</span>
                                                        <span class="value">demo-article</span>
                                                    </p> --}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-8 col-md-6">
                                            <div class="row g-0">
                                                <div class="quantity col-4 quantity col-4">
                                                    {{-- &nbsp;
                                                    <input class="value" type="number" required="required"
                                                        name="b_prod[0][quantity]" value="1" step="1"
                                                        min="1" max="2147483647">
                                                    <input type="hidden" type="text" name="b_prod[0][position]"
                                                        value="0">
                                                    <a class="minibutton change up"
                                                        href="/shop/basket?b_action=edit&b_position=0&b_quantity=2">+</a> --}}
                                                </div>
                                                <div class="unitprice col-4"></div> {{-- € 100.00 --}}
                                                <div class="price col-3"></div>{{--  € 100.00 --}}
                                                <div class="action col-1">
                                                    <a class="minibutton delete"
                                                        href="/shop/basket?b_action=delete&b_position=0"></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>





                                    <div class="subtotal row g-0">
                                        <div class="col-8 col-md-6 offset-4 offset-md-6">
                                            <div class="row g-0">
                                                <div class="col-8">Sub-total</div>
                                                <div class="price col-3">€ 100.00</div>
                                                <div class="action col-1"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="delivery row g-0">
                                        <div class="col-8 col-md-6 offset-4 offset-md-6">
                                            <div class="row g-0">
                                                <div class="col-8">Shipping</div>
                                                <div class="price col-3">€ 5.00</div>
                                                <div class="action col-1"></div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="total row g-0">
                                        <div class="col-8 col-md-6 offset-4 offset-md-6">
                                            <div class="row g-0 price-total">
                                                <div class="quantity col-4">1 article</div>
                                                <div class="col-4 total-text">Total</div>
                                                <div class="price col-3">€ 105.00</div>
                                                <div class="action col-1"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tax row g-0">
                                        <div class="col-8 col-md-6 offset-4 offset-md-6">
                                            <div class="row g-0">
                                                <div class="col-8">Incl. 20.00% tax</div>
                                                <div class="price col-3">€ 17.50</div>
                                                <div class="action col-1"></div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>

                        <div class="basket-standard-coupon">
                            <div class="header">
                                <h2>Coupon codes</h2>
                            </div>

                            <div class="content">

                                <div class="input-group coupon-new">
                                    <input class="form-control coupon-code" type="text" maxlength="255"
                                        placeholder="Coupon codes" name="b_coupon">
                                    <!--
--><button class="btn btn-primary" type="submit">Apply</button>
                                </div>

                            </div>
                        </div>

                        <div class="button-group">

                            <a class="btn btn-default btn-lg btn-back" href="/shop/demo-article">
                                Back</a>

                            <button class="btn btn-default btn-lg btn-update" type="submit">
                                Update</button>

                            <a class="btn btn-primary btn-lg btn-action" href="/shop/checkout">
                                Checkout</a>

                        </div>
                    </form>
                </div>
            </section>


            <section class="aimeos basket-related" data-jsonurl="https://laravel.demo.aimeos.org/jsonapi">
                <div class="basket-related-bought product-list container-xxl">

                    <h2 class="header">Products you might be also interested in</h2>


                    <div class="product row " data-prodid="1" data-reqstock="1" itemprop="isRelatedTo" itemscope
                        itemtype="http://schema.org/Product">

                        <div class="list-column col-12">

                            <div class="badges">
                                <span class="badge-item new">New</span>
                                <span class="badge-item sale">Sale</span>
                            </div>

                            <a class="media-list multiple" href="/shop/demo-article" title="Demo article">


                                <noscript>
                                    <div class="media-item">
                                        <img loading="lazy" itemprop="image"
                                            src="https://aimeos.org/media/default/product_01_A-low.webp"
                                            srcset="https://aimeos.org/media/default/product_01_A-low.webp 240w, https://aimeos.org/media/default/product_01_A-med.webp 720w, https://aimeos.org/media/default/product_01_A-big.webp 1350w"
                                            sizes="(min-width: 260px) 240px, 100vw" alt="Demo article">
                                    </div>
                                </noscript>


                                <div class="media-item">
                                    <img loading="lazy" itemprop="image"
                                        src="https://aimeos.org/media/default/product_01_A-low.webp"
                                        srcset="https://aimeos.org/media/default/product_01_A-low.webp 240w, https://aimeos.org/media/default/product_01_A-med.webp 720w, https://aimeos.org/media/default/product_01_A-big.webp 1350w"
                                        sizes="(min-width: 260px) 240px, 100vw" alt="Demo article">
                                </div>


                                <div class="media-item">
                                    <img loading="lazy" itemprop="image"
                                        src="https://aimeos.org/media/default/product_01_B-low.webp"
                                        srcset="https://aimeos.org/media/default/product_01_B-low.webp 240w, https://aimeos.org/media/default/product_01_B-med.webp 720w, https://aimeos.org/media/default/product_01_B-big.webp 1350w"
                                        sizes="(min-width: 260px) 240px, 100vw" alt="Demo article">
                                </div>


                            </a>
                        </div>

                        <div class="list-column col-12">
                            <a href="/shop/demo-article">

                                <div class="product-info">
                                    <div class="supplier">Demo supplier</div>

                                    <div class="rating">
                                        <!--
--><span class="stars"></span>
                                        <!--
-->
                                    </div>
                                </div>

                                <div class="text-list">
                                    <h2 class="name" itemprop="name">Demo article</h2>


                                    <div class="text-item" itemprop="description">
                                        This is the short description of the demo article.</div>


                                </div>
                            </a>

                            <div class="offer" itemscope itemprop="offers" itemtype="http://schema.org/Offer">

                                <div class="section">
                                    <div class="stock-list">
                                        <div class="articleitem stock-actual" data-prodid="1">
                                        </div>


                                    </div>

                                    <div class="price-list">
                                        <div class="articleitem price price-actual" data-prodid="1">


                                            <div class="price-item default" itemscope itemprop="priceSpecification"
                                                itemtype="http://schema.org/UnitPriceSpecification">

                                                <meta itemprop="valueAddedTaxIncluded" content="true">
                                                <meta itemprop="priceCurrency" content="EUR">
                                                <meta itemprop="priceType" itemtype="http://schema.org/SalePrice">
                                                <meta itemprop="price" content="100.00">

                                                <span class="quantity" itemscope
                                                    itemtype="http://schema.org/QuantitativeValue">
                                                    <meta itemprop="minValue" content="1">
                                                    from 1
                                                </span>

                                                <span class="value">
                                                    € 100.00</span>

                                                <span class="rebate">
                                                    € 20.00 off</span>
                                                <span class="rebatepercent">
                                                    -17%</span>

                                                <span class="costs">
                                                    + € 5.00/item</span>

                                                <span class="taxrate">
                                                    Incl. 20.00% VAT</span>
                                            </div>


                                        </div>

                                    </div>

                                </div>


                            </div>
                        </div>
                    </div>


                </div>
            </section>

            <section class="aimeos basket-bulk" data-jsonurl="https://laravel.demo.aimeos.org/jsonapi">
                <div class="container-xxl">

                    <h1>Order</h1>

                    <form method="POST" action="/shop/basket">
                        <!-- basket.bulk.csrf -->
                        <input class="csrf-token" type="hidden" name="_token"
                            value="mR8HsEtio3RkDJKMPJX3UgaWVNSBoWvCRCBEdt4Y" /><!-- basket.bulk.csrf -->

                        <input type="hidden" value="add" name="b_action">

                        <div class="bulk-main">
                            <div class="row g-0 headline">
                                <div class="col-sm-6 product-item">Article</div>
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-4 quantity">Quantity</div>
                                        <div class="col-4 price">Price</div>
                                        <div class="col-4 buttons">
                                            <div class="minibutton add"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bulk-content">
                                <div class="row g-0 details">
                                    <div class="col-sm-6 product-item">
                                        <input type="hidden" class="attrvarid" name="b_prod[0][attrvarid][_type_]">
                                        <input type="hidden" class="productid" name="b_prod[0][prodid]">
                                        <input type="text" class="value search" tabindex="1"
                                            placeholder="SKU or article name">
                                        <div class="vattributes"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-4 quantity">
                                                <input type="number" class="value" tabindex="1"
                                                    name="b_prod[0][quantity]" min="1" max="2147483647"
                                                    step="1" required="required" value="1">
                                            </div>
                                            <div class="col-4 price"></div>
                                            <div class="col-4 buttons">
                                                <div class="minibutton delete" tabindex="1"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row g-0 details prototype">
                                    <div class="col-sm-6 product-item">
                                        <input type="hidden" class="attrvarid" disabled="disabled"
                                            name="b_prod[_idx_][attrvarid][_type_]">
                                        <input type="hidden" class="productid" disabled="disabled"
                                            name="b_prod[_idx_][prodid]">
                                        <input type="text" class="value search" tabindex="1"
                                            disabled="disabled" placeholder="SKU or article name">
                                        <div class="vattributes"></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="row">
                                            <div class="col-4 quantity">
                                                <input type="number" class="value" tabindex="1"
                                                    disabled="disabled" name="b_prod[_idx_][quantity]" min="1"
                                                    max="2147483647" step="1" required="required"
                                                    value="1">
                                            </div>
                                            <div class="col-4 price"></div>
                                            <div class="col-4 buttons">
                                                <div class="minibutton delete"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>

                                <div class="button-group">
                                    <button class="btn btn-primary btn-lg btn-action" type="submit" value=""
                                        tabindex="1">
                                        Add to basket</button>
                                </div>

                    </form>
                </div>
            </section>
        </div>
    </div>


    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6 footer-left">
                            <div class="footer-block">
                                <h2 class="pb-3">LEGAL</h2>
                                <p><a href="https://laravel.demo.aimeos.org/p/terms">Terms &amp; Conditions</a></p>
                                <p><a href="https://laravel.demo.aimeos.org/p/privacy">Privacy Notice</a></p>
                                <p><a href="https://laravel.demo.aimeos.org/p/cancel">Cancellation</a></p>
                            </div>
                        </div>
                        <div class="col-sm-6 footer-center">
                            <div class="footer-block">
                                <h2 class="pb-3">ABOUT US</h2>
                                <p><a href="https://laravel.demo.aimeos.org/p/contact">Contact us</a></p>
                                <p><a href="https://laravel.demo.aimeos.org/p/about">Company</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-right">
                    <div class="footer-block">
                        <a class="logo" href="/" title="Logo">
                            <img src="https://laravel.demo.aimeos.org/aimeos/../vendor/shop/themes/default/assets/logo.png"
                                height="40" alt="Logo">
                        </a>
                        <div class="social">
                            <p><a href="#" class="sm facebook" title="Facebook" rel="noopener">Facebook</a>
                            </p>
                            <p><a href="#" class="sm twitter" title="Twitter" rel="noopener">Twitter</a></p>
                            <p><a href="#" class="sm instagram" title="Instagram" rel="noopener">Instagram</a>
                            </p>
                            <p><a href="#" class="sm youtube" title="Youtube" rel="noopener">Youtube</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <a id="toTop" class="back-to-top" href="#" title="Back to top">
        <div class="top-icon"></div>
    </a>

    <!-- Scripts -->
    <script src="https://laravel.demo.aimeos.org/vendor/shop/themes/default/app.js?v=1"></script>
    <script src="https://laravel.demo.aimeos.org/vendor/shop/themes/default/aimeos.js?v=1"></script>
</body>

</html>
