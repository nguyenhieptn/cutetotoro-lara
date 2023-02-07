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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Questrial&display=swap" rel="stylesheet">

    <title>Cute Totoro</title>

    <link rel="stylesheet" href="{{ asset('FrontEnd/Css/best-seller.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- header -->
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
                    <a class="link" href="/mug">
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
                    </a>
                </div>
            </div>
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
    <!-- end header -->

    {{-- content  --}}
    <div class="container">
        <div class="mug-link">
            <p class="d-flex">
                <a href="#">Home </a>
                <span style="margin: 0 10px;">/</span> About us
            </p>
        </div>

        <div class="about-news d-flex">
            <img src="{{ asset('FrontEnd/Image/about/eye.png') }}" alt="eye">
            <p>News</p>
        </div>

        <div class="row">
            <div class="col-lg-7">
                <div class="about-main">
                    <img src="{{ asset('FrontEnd/Image/about/m.png') }}" alt="eye" class="about-main-img">
                    <div class="about-main-content">
                        <p>Anime, Studio Ghibli, My Neighbor Totoro, HD wallpaper</p>
                        <div style="margin: 10px 0 20px 0">
                            <img src="{{ asset('FrontEnd/Image/about/calendar.png') }}" alt="eye">
                            21/01/2023
                            <img src="{{ asset('FrontEnd/Image/about/view.png') }}" alt="eye">
                            lượt xem
                        </div>
                        <p>Đúng ba thập kỷ sau khi ra đời, bộ phim hoạt hình nổi tiếng “My Neighbor Totoro” mới lần đầu
                            được trình chiếu ngoài rạp tại Trung Quốc.<br>
                            Tạp chí Hollywood Reporter đưa tin My Neighbor Totoro là bộ phim đầu tiên của xưởng hoạt
                            hình lừng danh Ghibli được phát hành ngoài rạp tại Trung Quốc. Tác phẩm dự kiến ra mắt khán
                            giả quốc gia tỷ dân từ ngày 14/12, qua đó đánh dấu sinh nhật lần thứ 30 của mình.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="about-side d-flex">
                    <img src="{{ asset('FrontEnd/Image/about/1.png') }}" alt="eye">
                    <div class="about-side-content">
                        Top list Anime, Studio Ghibli, My Neighbor Totoro, HD wallpaper
                        <div>
                            <img src="{{ asset('FrontEnd/Image/about/calendar.png') }}" alt="eye">
                            27/01/2023
                        </div>
                    </div>
                </div>
                <div class="about-side d-flex">
                    <img src="{{ asset('FrontEnd/Image/about/2.png') }}" alt="eye">
                    <div class="about-side-content">
                        Top list Anime, Studio Ghibli, My Neighbor Totoro, HD wallpaper
                        <div>
                            <img src="{{ asset('FrontEnd/Image/about/calendar.png') }}" alt="eye">
                            27/01/2023
                        </div>
                    </div>
                </div>
                <div class="about-side d-flex">
                    <img src="{{ asset('FrontEnd/Image/about/3.png') }}" alt="eye">
                    <div class="about-side-content">
                        Top list Anime, Studio Ghibli, My Neighbor Totoro, HD wallpaper
                        <div>
                            <img src="{{ asset('FrontEnd/Image/about/calendar.png') }}" alt="eye">
                            27/01/2023
                        </div>
                    </div>
                </div>
                <div class="about-side d-flex">
                    <img src="{{ asset('FrontEnd/Image/about/4.png') }}" alt="eye">
                    <div class="about-side-content">
                        Top list Anime, Studio Ghibli, My Neighbor Totoro, HD wallpaper
                        <div>
                            <img src="{{ asset('FrontEnd/Image/about/calendar.png') }}" alt="eye">
                            27/01/2023
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end content  --}}
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
    <script language="JavaScript" type="text/javascript"  src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script language="JavaScript" type="text/javascript" >
        var $element = $('.element').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows'
        });
    </script>
</footer>

</html>
