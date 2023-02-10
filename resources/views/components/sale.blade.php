
<div class="sale-category ">
    <div class="list-category d-flex justify-content-center">
        <div id="filters" class="button-group">
            <button class="button is-checked d-none" data-filter="*">po</button>
            <button class="button" data-filter=".mug">mug</button>
            <button class="button" data-filter=".poster">poster</button>
            <button class="button" data-filter=".t-shirt">t-shirt</button>
            <button class="button" data-filter=".sticker">sticker</button>
            <button class="button" data-filter=".other">other</button>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xxl-4 col-lg-4 col-12">
            <a href="#"><img class="img-sale-main" src="{{ asset('FrontEnd/Image/sale/main.png') }}"
                    alt=""></a>
        </div>
        <div class="col-xxl-8 col-lg-8 col-12">
            <div class="grid">
                {{-- @foreach ($BestSeller as $key => $data)
                    <div class="grid-item grid-item-cus {{$data->type}}">
                        <a href="#" class="d-grid">
                            <img src="{{$data->url}}" alt="">
                            <div class="sale-price">
                                <span>{{ $data->rating }}$</span>
                                <span>{{ $data->target }}$</span>
                            </div>
                        </a>
                    </div>
                @endforeach --}}
            </div>
        </div>
    </div>

</div>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
