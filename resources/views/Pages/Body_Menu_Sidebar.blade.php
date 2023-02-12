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
                    @foreach (getCategoriesMenu() as $key => $data)
                        <li>
                            <a href="{{$data->url}}">{{ $data->label }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="d-flex">
            <div class="Logo">
                <a href="{{route('home')}}">
                    <img src="{{ asset('FrontEnd/Image/logo_totoro.png') }}" alt="logo_page">
                </a>
            </div>
        </div>
        <div class=" wrap-nav-right">
            <ul class="Search">
                <li class="wrap-search">
                    <div class="d-flex">
                        <input style="border: none" class="Search_Input" type="text" name="Search"
                               placeholder="Search...">
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
                            <a class="Cart_Icon" href="{{ route('cart') }}">
                                <img class="cart_shippping" src="{{ asset('FrontEnd/Image/cart.png') }}">
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

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
            <input class="Search_Input" type="text" name="Search" placeholder="Search..."
                   style="width: -webkit-fill-available; border-color: rgba(24, 23, 23, 0.5)">
            <span>
                <a href="/search-items">
                    <img class="Search_Icon" src="{{ asset('FrontEnd/Image/search.png') }}">
                </a>
            </span>
        </div>
        @include('Pages.menuSidebar')
    </div>
</div>
{{-- end sidebar menu --}}
@include('Pages.javascriptSidebarMenu')
@include('Pages.styleSidebarMenu')
