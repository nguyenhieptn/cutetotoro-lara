<div class="footer_desktop">
    @include('components.footer')
</div>
<style>
@media screen and (min-width: 601px) {
    .footer_mobile {
        display: none;
    }
    .ft_mobile{
        display: none;
    }
}

@media screen and (max-width: 600px) {
    .footer_desktop {
        display: none;
    }
}
.footer_mobile p{
    font-family: 'Manjari';
    font-style: normal;
    font-weight: 700;
    font-size: 15px;
    line-height: 18px;
    color: #000000;
    text-align: center;

}
.titel_ft{
    text-align: center;
}
.list{
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
<div class="footer_mobile">
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
                <p class="list">Terms of Service</p>
            </div>
        </div>
    </div>
</div>
<br>
<div class="container-fluid ft_mobile" style="color: #a4a4a4">
    <style>
        .ft_list{
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
        .ft_list_cp{
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
        .text-center1{
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
    </style>
    <div class="text-center">
        <a href="" class="ft_list">WISHLIST</a>
        <a href="" class="ft_list">ABOUT US</a>
        <a href="" class="ft_list">CONTACT US</a>
        <a href="" class="ft_list">SHIPPING</a>
        <a href="" class="ft_list">POLICY</a>
        <a href="" class="ft_list">TERMS OF SERVICE</a>
    </div>
    <br>
    <div class="text-center1 d-flex">
        <p class="ft_list_cp" style="padding-right: 1rem">Contact</p>
        <img src="{{asset('/FrontEnd/Image/Line4.png')}}" alt="" style="height: 34px;padding-bottom: 1rem;">
        <p class="ft_list_cp" style="padding-left: 1rem">About</p>
    </div>
    <div class="text-center">
        <p class="ft_list_cp">Copyright 2023 © Cutetotoro</p>
    </div>
</div>