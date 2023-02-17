<div class="sale-category ">
    <div class="list-category d-flex justify-content-center">
        <div id="filters" class="button-group">
            <button class="button is-checked" data-filter="*">all</button>
            <button class="button" data-filter=".Mug">mug</button>
            <button class="button" data-filter=".Poster">poster</button>
            <button class="button" data-filter=".T-shirt">t-shirt</button>
            <button class="button" data-filter=".Sticker">sticker</button>
            <button class="button" data-filter=".Other">other</button>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xxl-4 col-lg-4 col-12">
            <a href="#"><img class="img-sale-main" src="{{ asset('FrontEnd/Image/sale/main.png') }}"alt=""></a>
        </div>
        <div class="col-xxl-8 col-lg-8 col-12">
            <div class="grid">
                @foreach($bestSeller as $dt)
                <div class="grid-item grid-item-cus {{$dt['product.type']}}">
                    <a href="/product-detail/{{$dt['product.id']}}" class="d-grid">
                        <img src="/aimeos/{{$dt['media'][0]}}" alt="Ảnh sản phẩm" class="grid-item-cus-img">
                        <div class="sale-price">
                            <span>{{$dt['price'][0]['actual']}}$</span>
                            <span>{{$dt['price'][0]['sale']}}$</span>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">