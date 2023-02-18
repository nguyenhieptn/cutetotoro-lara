
<div class="best_seller">
    <div class="container container-globe">
        <div class="row best_seller_top">
            <div class="best_seller_top-image">
                               <img class="bsl__bn" src="{{ asset('FrontEnd/Image/Group%204.png') }}" alt="">
            </div>
        </div>
    </div>
</div>
<section id="slider" class="slider-slictiky">
    <div class="container container-globe" style="position: relative">
        <div class="row d-flex justify-content-center">
            <a href="/all-product" class="a-view-all text-end">View all</a>

            <div class="main-carousel row"
                 data-flickity='{ "cellAlign": "right", "contain": true, "wrapAround": true}'>
                {{-- "autoPlay": 3000 --}}
                @foreach ($bestSeller as $data)
              
                    <div class="carousel-cell" style="position: relative">
                        <a href="{{ route('product.detail',$data['product.id'] ) }}">
                            <img style="width: 100%" src="/aimeos/{{$data['media'][0] }}" class="girl img-responsive" alt="">
                        </a>
                        <div class="best_seller_bottom">
                                    <span>
                                        {!! $data['text'][0] !!}
                                    </span>
                            <div class="best_seller-price">
                                    <span>{{ $data['price'][0]['actual'] }}$</span>
                                    @php
                                        $sale =  $data['price'][0]['actual']  -  $data['price'][0]['rebate'];
                                    @endphp
                                    <span>{{$sale}}$</span>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<link rel="stylesheet" href="{{ asset('FrontEnd/Css/main-details.css?v='.time()) }}">
<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
