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
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <title>Cute Totoro</title>

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- content -->
    <!-- Controller -->
    <?php
    use App\Models\Catalog;
    $Catalog = Catalog::orderBy('id', 'DESC')->get();
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
                    {{-- <a class="link" href="/mug">
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
                    </a> --}}
                </div>
            </div>

            {{-- <div class="d-flex">
                <a class="link" href="/mug">
                    <p class="Mug__CSS">Mug</p>
                </a>
                @foreach ($Catalog as $key => $data)
                    <a class="link" href="/{{$data->label}}">
                        <p class="T__Shirt">{{$data->label}}</p>
                    </a> --}}
            <!-- <a class="link" href="/sticker">
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
                    </a> -->
            {{-- @endforeach
            </div> --}}
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
                            <img class="banner_img" src="{{ asset('FrontEnd/Image/banner1.png') }}"
                                class="d-block w-100" alt="i love you">
                        </div>
                        <div class="carousel-item">
                            <img class="banner_img" src="{{ asset('FrontEnd/Image/sale.png') }}" class="d-block w-100"
                                alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="banner_img" src="{{ asset('FrontEnd/Image/bestchoose.png') }}"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img class="banner_img" src="{{ asset('FrontEnd/Image/saleup.png') }}"
                                class="d-block w-100" alt="...">
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

        {{-- best-seller --}}
        <div style="margin-top: 10px">
            @include('components.best-seller')
        </div>
        {{-- end-best-seller --}}

        <!-- sale product -->
        <div style="margin-top: 100px">
            @include('components.sale')
        </div>
        <!-- end sale product -->

        {{-- about --}}
        <div>
            @include('components.about')
        </div>
        {{-- end-about --}}

        {{-- footer --}}
        <div>
            @include('components.footer')
        </div>
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

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script language="JavaScript" type="text/javascript" src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script language="JavaScript" type="text/javascript">
        var $grid = $('.grid').isotope({
            itemSelector: '.grid-item',
            layoutMode: 'fitRows'
        });
        $('#filters').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            // use filterFn if matches value
            // filterValue = filterFns[filterValue] || filterValue;
            $grid.isotope({
                filter: filterValue
            });
        });
        $('.button-group').each(function(i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);
            $buttonGroup.on('click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $(this).addClass('is-checked');
            });
        });
    </script>
</footer>

</html>
