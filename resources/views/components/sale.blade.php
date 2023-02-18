<div class="sale-category ">
    <div class="list-category d-flex justify-content-center">
        <div id="filters" class="button-group tab">
            <button onclick="openType(event, 'All')" id="defaultOpen" class="button tablinks is-checked" data-filter="*">all</button>
            <button onclick="openType(event, 'Mug')" class="button tablinks" data-filter=".Mug">mug</button>
            <button onclick="openType(event, 'Poster')" class="button tablinks" data-filter=".Poster">poster</button>
            <button onclick="openType(event, 'T-shirt')" class="button tablinks" data-filter=".T-shirt">t-shirt</button>
            <button onclick="openType(event, 'Sticker')" class="button tablinks" data-filter=".Sticker">sticker</button>
            <button onclick="openType(event, 'Other')" class="button tablinks" data-filter=".Other">other</button>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-xxl-4 col-lg-4 col-12">
            <div class="">
                <div id="All" class="tabcontent ">
                    <a href="#"><img class="img-sale-main"
                            src="{{ asset('FrontEnd/Image/sale/main.png') }}"alt=""></a>
                </div>
                <div id="Mug" class="tabcontent ">
                    <a href="#"><img class="img-sale-main"
                            src="{{ asset('FrontEnd/Image/sale/main.png') }}"alt=""></a>
                </div>
                <div id="Poster" class="tabcontent ">
                    <a href="#"><img class="img-sale-main"
                            src="{{ asset('FrontEnd/Image/sale/main.png') }}"alt=""></a>
                </div>
                <div id="T-shirt" class="tabcontent ">
                    <a href="#"><img class="img-sale-main"
                            src="{{ asset('FrontEnd/Image/sale/main.png') }}"alt=""></a>
                </div>
                <div id="Sticker" class="tabcontent ">
                    <a href="#"><img class="img-sale-main"
                            src="{{ asset('FrontEnd/Image/sale/main.png') }}"alt=""></a>
                </div>
                <div id="Other" class="tabcontent ">
                    <a href="#"><img class="img-sale-main"
                            src="{{ asset('FrontEnd/Image/sale/main.png') }}"alt=""></a>
                </div>
            </div>
        </div>
        <div class="col-xxl-8 col-lg-8 col-12">
            <div class="grid">
                @php
                foreach ($bestSeller as $dt){
                    if($dt['product.label'] == 'Mug'){
                        $sale_product = array_slice($dt, 0, 6);
                    }
                }
                @endphp
                @foreach ($sale_product as $dt)
                    <div class="grid-item grid-item-cus {{ $dt['product.label'] }}">
                        <a href="/product-detail/{{ $dt['product.id'] }}" class="d-grid">
                            <img src="/aimeos/{{ $dt['media'][0] }}" alt="Ảnh sản phẩm" class="grid-item-cus-img">
                            <div class="sale-price">
                                <span>{{ $dt['price'][0]['actual'] }}$</span>
                                @php
                                    $sale =  $dt['price'][0]['actual']  -  $dt['price'][0]['rebate'];
                                @endphp
                                <span>{{$sale}}$</span>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<script>
    function openType(evt, typeName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(typeName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
</script>
