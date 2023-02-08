<!-- content -->
<!-- Controller -->
<?php
use App\Models\Catalog;
$Catalog = Catalog::orderBy('id', 'ASC')->get();
?>
<!-- End Controler -->
<div class="container-fluid Header_Style">
    <div class="container d-flex container1" style="justify-content: space-between">
        <div class="d-flex wrap-nav-left">
            <div class="wrap-bar">
                <a class="Bar_Menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                    aria-controls="offcanvasScrolling">
                    <img src="{{ asset('FrontEnd/Image/bar.png') }}" alt="bar_tool">
                </a>
                {{-- Sidebar menu --}}
                <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
                    id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
                    <div class="offcanvas-header">
                        <div class="Logo_sidebar">
                            <a href="/home-page">
                                <img src="{{ asset('FrontEnd/Image/logo_totoro.png') }}" alt="logo_page">
                            </a>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <div class="list-group list-group-flush">
                            @foreach ($Catalog as $key => $data)
                                <a type="button"
                                    class="list-group-item list-group-item-action list-group-item-action list_babel"
                                    aria-current="true">
                                    <p style="margin-top: 25px">{{ $data->label }}</p>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="d-flex Category">
                @foreach ($Catalog as $key => $data)
                    <a class="Text_Category" href="/{{ $data->label }}">
                        <p class="Text">{{ $data->label }}</p>
                    </a>
                @endforeach
            </div> --}}
            <div class="d-flex Category">
                <ul>
                    @foreach ($Catalog as $key => $data)
                        <li>
                            <a href="">{{ $data->label }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="d-flex">
            <div class="Logo">
                <a href="/home-page">
                    <img src="{{ asset('FrontEnd/Image/logo_totoro.png') }}" alt="logo_page">
                </a>
            </div>
        </div>
        <div class="d-flex wrap-nav-right">

            <ul class="Search d-flex ">
                <li>
                    <div class="d-flex">
                        <input class="Search_Input" type="text" name="Search" placeholder="Search...">
                        <span>
                            <a href="/search-items">
                                <img class="Search_Icon" src="{{ asset('FrontEnd/Image/search.png') }}">
                            </a>
                        </span>
                    </div>
                </li>

                <li>
                    <ul class="d-flex wrap-cart">
                        <li>
                            <a class="Cart d-flex align-item-center" href="">
                                <p>Cart/$0.00</p>
                            </a>
                        </li>
                        <li>
                            <a class="Cart_Icon" href="/cart">
                                <img class="cart_shippping" src="{{ asset('FrontEnd/Image/cart.png') }}">
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

            {{-- <div>
                <input class="Search_Input" type="text" name="Search" placeholder="Search...">
                <span>
                    <a href="/search-items">
                        <img class="Search_Icon" src="{{ asset('FrontEnd/Image/search.png') }}">
                    </a>
                </span>
            </div>
            <div class="d-flex wrap-cart">
                <a class="Cart" href="">
                    <p>Cart/$0.00</p>
                </a>
                <a class="Cart_Icon" href="/cart">
                    <img class="cart_shippping" src="{{ asset('FrontEnd/Image/cart.png') }}">
                </a>
            </div> --}}
        </div>
    </div>

</div>
<!-- end content -->
{{-- response ipad --}}

{{-- reponse mobile --}}
<div class="container-fluid Header_Mobile">
    <div class="d-flex" style="justify-content: center; position: relative;">
        <a style="position: absolute; left: 0; top: 71px" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasScrolling2" aria-controls="offcanvasScrolling2">
            <img src="{{ asset('FrontEnd/Image/bar.png') }}" alt="bar_tool">
        </a>
        {{-- sidebar menu --}}
        <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling2" aria-labelledby="offcanvasScrollingLabe">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title content_sidebar" id="offcanvasScrollingLabel">Totoro Shop</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <p class="content_sidebar">This is a content Slide Bar</p>
            </div>
        </div>
        <div style="position: absolute; top: 52px;">
            <a href="/home-page">
                <img src="{{ asset('FrontEnd/Image/logo_totoro.png') }}" alt="logo_page">
            </a>
        </div>
        <div class="d-flex" style="position: absolute; right: 0px; top: 10px">
            <div>
                <a href="/cart">
                    <p
                        style="
                    position: absolute; left: -123px; top: -7px;
                ">
                        Cart/$0.00</p>
                </a>
            </div>
            <div>
                <img style="
                position: absolute;
                left: -52px;
                top: -77px;
            "
                    class="Line" src="{{ asset('FrontEnd/Image/Line1.png') }}" alt="">
            </div>
            <div style="position: absolute;
            right: 0;
            top: -17px;">
                <a href="/cart">
                    <img src="{{ asset('FrontEnd/Image/cart.png') }}">
                </a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid p-0">
    <div class="banner_mobile">
        <div id="carouselExample2" class="carousel slide">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="Banner_mobile" src="{{ asset('FrontEnd/Image/banner1.png') }}" alt="i love you">
                </div>
                <div class="carousel-item">
                    <img class="Banner_mobile" src="{{ asset('FrontEnd/Image/sale.png') }}" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="Banner_mobile" src="{{ asset('FrontEnd/Image/bestchoose.png') }}" alt="...">
                </div>
                <div class="carousel-item">
                    <img class="Banner_mobile" src="{{ asset('FrontEnd/Image/saleup.png') }}" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample2"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true">
                    <img src="{{ asset('FrontEnd/Image/back.png') }}">
                </span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample2"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true">
                    <img src="{{ asset('FrontEnd/Image/next.png') }}">
                </span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
{{-- CSS --}}
<link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd/Css/StyleHomePage.css') }}">
