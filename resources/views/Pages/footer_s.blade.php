<div class="footer_desktop" style="background-color: #f0eded">
    @include('components.footer')

</div>
<style>
    @media screen and (min-width: 769px) {
        .footer_mobile {
            display: none;
        }

        .ft_mobile {
            display: none;
        }
    }

    @media screen and (max-width: 768px) {
        .footer_desktop {
            display: none;
        }
    }

    .footer_mobile p {
        font-family: 'Manjari';
        font-style: normal;
        font-weight: 700;
        font-size: 15px;
        line-height: 18px;
        color: #000000;
        text-align: center;

    }

    .titel_ft {
        text-align: center;
    }

    .list {
        font-family: 'Manjari';
        font-style: normal;
        font-weight: 700;
        font-size: 15px;
        line-height: 18px;
        justify-content: center;
        color: #000000;
        text-decoration: underline;
    }
</style>
<div class="footer_mobile" style="background-color: #f0eded; padding: 50px 0">
    <div class='container'>
        <div>
            <p class="titel_ft">ABOUT US</p>
            <p>We founded Cute Totoro with one simple goal:</p>
            <p>To make you so special and so cute with Totoro.</p>
            <p>Join us if you also love Totoro</p>
            <p>#cutetotoro</p>
        </div>
        <br>
        <div>
            <p class="titel_ft">CONTACT US</p>
            <p>Email: <a href="#"
                         style="font-family: 'Manjari';font-style: normal;font-weight: 700;font-size: 15px;line-height: 18px;justify-content: center;color: #000000;">cutetoro.com@gmail.com</a>
            </p>
            <p>Phone: +1 (740) 291-3866</p>
            <p>Mon - Fri: 08:00 AM to 06:00 PM GMT+9</p>
        </div>
        <br>
        <div>
            <p class="titel_ft">INFORMATION</p>
            <div>
                <p class="list">Wishplist</p>
                <p class="list">About us</p>
                <p class="list">Contact us</p>
                <p class="list">Shipping Poplicy</p>
                <p style="margin-bottom: 0" class="list">Terms of Service</p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid ft_mobile" style="color: #a4a4a4; background-color: #a4a4a4; padding-top: 30px">
    <style>
        .ft_list {
            font-family: 'Manjari';
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 21px;
            text-align: center;
            text-decoration-line: underline;
            text-transform: lowercase;
            color: #000000;
        }

        .ft_list_cp {
            font-family: 'Manjari';
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 21px;
            text-align: center;
            text-transform: lowercase;
            color: #000000;
            align-items: center;
        }

        .text-center1 {
            font-family: 'Manjari';
            font-style: normal;
            font-weight: 700;
            font-size: 18px;
            line-height: 21px;
            text-align: center;
            text-transform: lowercase;
            color: #000000;
            align-items: center;
            justify-content: center;
        }

        .ft_list_cp {
            margin-bottom: 0px
        }

        .ft-ul-mb>li {
            padding: 0 7px
        }

        .ft_list_cpu {
            position: relative;
        }

        .ft_list_cpu::before {
            position: absolute;
            content: "";
            width: 1px;
            height: 80%;
            top: 0;
            right: 0;
            background-color: black
        }
    </style>
    <div class="text-center" style="margin-bottom: 10px">
        <a href="" class="ft_list">WISHLIST</a>
        <a href="" class="ft_list">ABOUT US</a>
        <a href="" class="ft_list">CONTACT US</a>
        <a href="" class="ft_list">SHIPPING</a>
        <a href="" class="ft_list">POLICY</a>
        <a href="" class="ft_list">TERMS OF SERVICE</a>
    </div>
    <div class="text-center1 d-flex" style="margin-bottom: 3px">
        <p class="ft_list_cp ft_list_cpu" style="padding-right: 1rem">Contact</p>
        {{-- <img src="{{ asset('/FrontEnd/Image/Line4.png') }}" alt="" style="height: 34px;padding-bottom: 1rem;"> --}}
        <p class="ft_list_cp ft_list_cpu" style="padding-left: 1rem; padding-right: 1rem">About</p>
        <ul class=ft-ul-mb
            style="list-style: none; padding-left: 0px; margin-bottom: 0px; margin-left: 10px; display: flex">
            <li>
                <a href="#">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-brands fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-brands fa-telegram"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="text-center">
        <p class="ft_list_cp">Copyright 2023 © Cutetotoro</p>
    </div>
</div>
<footer>
    <!-- footer page -->

    <!-- script -->

    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script>
        var $element = $('.element').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows',
            getSortData: {
                number: '.number parseInt',
                weight: '.weight parseInt'
            }
        });
        $('#filters').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            // use filterFn if matches value
            // filterValue = filterFns[filterValue] || filterValue;
            $element.isotope({
                filter: filterValue
            });
        });
        $('.button-groupp').each(function(i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);

            $buttonGroup.on('click', 'button', function() {
                $buttonGroup.find('.is-checked').removeClass('is-checked');
                $(this).addClass('is-checked');
            });
        });
        // bind sort button click
        $('#sorts').on('click', 'button', function() {
            var sortByValue = $(this).attr('data-sort-by');
            // ale
            $element.isotope({
                sortBy: sortByValue
            });
        });
    </script>
</footer>
