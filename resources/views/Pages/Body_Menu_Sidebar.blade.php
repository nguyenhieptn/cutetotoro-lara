<!-- content -->
<!-- Controller -->
<?php
use App\Models\Catalog;
$Catalog = Catalog::orderBy('id', 'ASC')->get();
?>
<!-- End Controler -->
<div class="container-fluid Header_Style">
    <div class="container d-flex container1 wrap-header">
        <div class="wrap-nav-left">
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
                                <a href="/{{ $data->url }}" type="button"
                                    class="list-group-item list-group-item-action list-group-item-action list_babel"
                                    aria-current="true">
                                    <p style="margin-top: 25px">{{ $data->label }}</p>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="Category">
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
        <div class=" wrap-nav-right">
            <ul class="Search">
                <li class="wrap-search">
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
                    <img class="Banner_mobile" src="{{ asset('FrontEnd/Image/sale.png') }}"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img class="Banner_mobile" src="{{ asset('FrontEnd/Image/bestchoose.png') }}"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img class="Banner_mobile" src="{{ asset('FrontEnd/Image/saleup.png') }}"
                        alt="...">
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
{{-- CSS --}}
<link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd/Css/StyleHomePage.css') }}">