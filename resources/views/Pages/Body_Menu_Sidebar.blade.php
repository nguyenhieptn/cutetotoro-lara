<!-- content -->
<!-- Controller -->
<?php
use App\Models\Catalog;
$Catalog = Catalog::orderBy('id', 'ASC')->get();
?>
<!-- End Controler -->
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
                @foreach ($Catalog as $key => $data)
                    <a class="link" href="/{{ $data->label }}">
                        <p class="T__Shirt">{{ $data->label }}</p>
                    </a>
                @endforeach
            </div>
        </div>
        <div class="">
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
    <div class="container-fluid" style="width: 1440px">
        <div class="banner">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="banner_img" src="{{ asset('FrontEnd/Image/banner1.png') }}" class="d-block w-100"
                            alt="i love you">
                    </div>
                    <div class="carousel-item">
                        <img class="banner_img" src="{{ asset('FrontEnd/Image/sale.png') }}" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="banner_img" src="{{ asset('FrontEnd/Image/bestchoose.png') }}" class="d-block w-100"
                            alt="...">
                    </div>
                    <div class="carousel-item">
                        <img class="banner_img" src="{{ asset('FrontEnd/Image/saleup.png') }}" class="d-block w-100"
                            alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true">
                        <img src="{{ asset('FrontEnd/Image/back.png') }}">
                    </span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true">
                        <img src="{{ asset('FrontEnd/Image/next.png') }}">
                    </span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

    </div>
<!-- end content -->
{{-- CSS --}}
<link rel="stylesheet" type="text/css" href="{{ asset('FrontEnd/Css/StyleHomePage.css') }}">
