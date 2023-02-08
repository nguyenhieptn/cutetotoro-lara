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
                <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling"
                    aria-controls="offcanvasScrolling"><img src="{{ asset('FrontEnd/Image/bar.png') }}"
                        alt="bar_tool"></button>
                {{-- sidebar menu --}}
                {{-- end sidebar menu --}}
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
{{-- sidebar menu --}}
<div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
    id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
        <a href="/home-page">
            <img src="{{ asset('FrontEnd/Image/logo_totoro.png') }}" alt="logo_page">
        </a>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body listItems">
        <p>Wellcom to Shop Totoro</p>
        <div class="d-flex">
            <input class="Search_Input" type="text" name="Search" placeholder="Search..." style="width: -webkit-fill-available;">
            <span>
                <a href="/search-items">
                    <img class="Search_Icon" src="{{ asset('FrontEnd/Image/search.png') }}">
                </a>
            </span>
        </div>
        <p>Click on the Category to open the list menu.</p>
        <div class="dropdown">
            <button onclick="myFunction()" class="dropbtn">Mug</button>
            <div id="myDropdown" class="dropdown-content">
                <a href="#home">Mug</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
        <div class="dropdown">
            <button onclick="myFunction1()" class="dropbtn1">T-shrit</button>
            <div id="myDropdown1" class="dropdown-content1">
                <a href="#home">T-Shrit</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
        <div class="dropdown">
            <button onclick="myFunction2()" class="dropbtn2">Sticker</button>
            <div id="myDropdown2" class="dropdown-content2">
                <a href="#home">Sticker</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
        <div class="dropdown">
            <button onclick="myFunction3()" class="dropbtn3">Poster</button>
            <div id="myDropdown3" class="dropdown-content3">
                <a href="#home">Poster</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
        <div class="dropdown" style="margin-top: 20px">
            <button onclick="myFunction4()" class="dropbtn4">Bag</button>
            <div id="myDropdown4" class="dropdown-content4">
                <a href="#home">Bag</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
        <div class="dropdown" style="margin-top: 20px">
            <button onclick="myFunction5()" class="dropbtn5">Orther</button>
            <div id="myDropdown5" class="dropdown-content5">
                <a href="#home">Orther</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </div>
        </div>
    </div>
</div>
{{-- end sidebar menu --}}
@include('Pages.javascriptSidebarMenu')
@include('Pages.styleSidebarMenu')