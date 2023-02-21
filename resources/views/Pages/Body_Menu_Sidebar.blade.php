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
                            <a href="/{{ $data->label }}">{{ $data->label }}</a>
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
                    <div class="d-flex search-input">
                        <form action="/search" method="post">
                            @csrf
                            <input class="Search_Input" type="text" name="keywords_submit" placeholder="Search...">
                            <img type="submit" class="Search_Icon" src="{{ asset('FrontEnd/Image/search.png') }}">
                        </form>
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
        <p>Wellcome to Shop Totoro</p>
        <div class="d-flex search-input" style="width:100%; margin-bottom: 20px;">
            <form action="/search" method="post">
                @csrf
                <input class="Search_Input" type="text" name="keywords_submit" style="width:84%" placeholder="Search...">
                <button type="submit" name="search_product">
                    <img class="Search_Icon" src="{{ asset('FrontEnd/Image/search.png') }}">
                </button>
            </form>
        </div>
        @include('Pages.menuSidebar')
    </div>
</div>
{{-- end sidebar menu --}}
@include('Pages.javascriptSidebarMenu')
@include('Pages.styleSidebarMenu')
