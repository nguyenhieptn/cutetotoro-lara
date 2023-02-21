@include('Pages.header_s')
<body>
@include('cutetotoro::layouts.head')
<div class="container">
    <div class="mug-link">
        <p class="d-flex">
            <a href="/">Home </a>
            <span style="margin: 0 10px;">/</span>Mug
        </p>
    </div>
    <div class="row">
        <div class="mug-banner">
            <img src="{{ asset('FrontEnd/Image/mug/banner.png') }}" alt="banner" style="width: 100%;">
        </div>
    </div>
    <div class="row">
        <div class="mug-button d-flex justify-content-end dropdown">
            <button type="button" class="mug-btn " data-bs-toggle="dropdown" aria-expanded="false">price
                <img src="{{ asset('FrontEnd/Image/down.png') }}" alt="down">
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            <button type="button" class="mug-btn " data-bs-toggle="dropdown"
                    aria-expanded="false">colors
                <img src="{{ asset('FrontEnd/Image/down.png') }}" alt="down">
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            <button type="button" class="mug-btn " data-bs-toggle="dropdown" aria-expanded="false">type
                <img src="{{ asset('FrontEnd/Image/down.png') }}" alt="down">
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
            <div class="d-flex align-items-center">
                <img src="{{ asset('FrontEnd/Image/toright.png') }}" alt="toright">
            </div>
        </div>
    </div>
    @if($filteredArray == null)
        <h1 style="color: red">
            <center>Not item in page</center>
        </h1>
    @endif
    <div class="element" style="margin-top: 81px;">
        @foreach ($filteredArray as $key => $dt)
            <div class="element-item">
                <div class="mug-product">
                    <a href="{{ route('product.detail',$dt['product.id'] ) }}" style="display: block">
                        <div class="mug-img">
                            <img src="/aimeos/{{ $dt['media'][0] }}" class="girl img-responsive" alt=""/>
                            <div class="mug-sticker" >
                                <img src="{{ asset('FrontEnd/Image/heart.png') }}" alt="mug-layer">
                                <img src="{{ asset('FrontEnd/Image/cart0.png') }}" alt="mug-layer">
                            </div>
                        </div>
                        <div class="best_seller_bottom">
                                <span>
                                    {!! $dt['text'][0] !!}
                                </span>
                            <div class="best_seller-price">
                                <p style="display: flex; align-item: center; margin-right: 15px">
                                    <strike>{{ $dt['price'][0]['actual'] }}$</strike>
                                </p>
                                <p>{{ $dt['price'][0]['actual'] - $dt['price'][0]['rebate'] }}$</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>
@include('Pages.footer_s')
