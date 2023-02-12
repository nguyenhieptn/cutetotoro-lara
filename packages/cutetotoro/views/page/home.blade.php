@extends("cutetotoro::base")
@section('content')
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
        <div style="margin-top: 100px">
{{--            @include('components.best-seller')--}}
        </div>


{{--         <div style="margin-top: 10px">--}}
{{--            @include('components.best-seller')--}}
{{--        </div>--}}
{{--        --}}

        <!-- sale product -->
        <div style="margin-top: 70px">
            @include('components.sale')
        </div>
        <!-- end sale product -->

        <div>
            @include('components.about')
        </div>
@stop
