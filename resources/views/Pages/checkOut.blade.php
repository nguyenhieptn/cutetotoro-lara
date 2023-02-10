<!DOCTYPE html>
<html class="no-js" lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="0qptXRr7GC7EBB79hFprPydgfPIiBufdRwiV8SuP">
    <meta http-equiv="Content-Security-Policy"
        content="base-uri 'self'; default-src 'self' 'nonce-ExYB1eCaC2dW86TfTYq/aw=='; style-src &#039;unsafe-inline&#039; &#039;self&#039;; img-src &#039;self&#039; data: https://aimeos.org; frame-src https://www.youtube.com https://player.vimeo.com">

    <link type="text/css" rel="stylesheet" href="{{asset('default/app.css?v=1')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('default/aimeos.css?v=1')}}" />

    <title>Checkout</title>
    <title>Address | Default</title>
    <meta name="description" content="Default" />

    <link rel="stylesheet" href="{{asset('default/summary.css?v=1')}}">
    <link rel="stylesheet" href="{{asset('default/checkout-standard.css?v=1')}}">
    <script defer src="{{asset('default/checkout-standard.js?v=1')}}"></script>
    <script defer src="/shop/count"></script>

    <link rel="stylesheet" href="{{asset('default/catalog-filter.css?v=1')}}">
    <script defer src="{{asset('default/catalog-filter.js?v=1')}}"></script>

    <style nonce="ExYB1eCaC2dW86TfTYq/aw==">
        :root {}
    </style>

    <link rel="icon" href="{{asset('/default/assets/icon.png')}}" />

    <link rel="preload" href="{{asset('default/assets/roboto-condensed-v19-latin-regular.woff2')}}"
        as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('default/assets/roboto-condensed-v19-latin-700.woff2')}}" as="font"
        type="font/woff2" crossorigin>
    <link rel="preload" href="{{asset('default/assets/bootstrap-icons.woff2')}}" as="font"
        type="font/woff2" crossorigin>
</head>

<body class="page-checkout-index">
    <nav class="navbar navbar-expand-md navbar-top">
        <a class="navbar-brand" href="/" title="Logo">
            <img src="{{asset('/default/assets/logo.png')}}" height="40"
                alt="Logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-top"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-top">
        </div>


        <ul class="navbar-nav">
            <li class="nav-item login"><a class="nav-link" href="http://127.0.0.1:9000/login" title="Login"><span
                        class="name">Login</span></a></li>
        </ul>

    </nav>

    <div class="content">
        <div class="container-fluid">
            <section class="aimeos checkout-standard" data-jsonurl="http://127.0.0.1:9000/jsonapi">
                <nav class="container-xxl">
                    <ol class="steps">

                        <li class="step active basket">
                            <a href="/shop/basket">
                                Basket</a>
                        </li>


                        <li class="step current address">
                            Address</li>

                        <li class="step delivery">
                            Delivery</li>
                        <li class="step payment">
                            Payment</li>
                        <li class="step summary">
                            Summary</li>
                        <li class="step process">
                            process</li>

                    </ol>
                </nav>

                <form class="container-xxl" method="POST" action="/shop/checkout/delivery">
                    <input class="csrf-token" type="hidden" name="_token"
                        value="0qptXRr7GC7EBB79hFprPydgfPIiBufdRwiV8SuP" />
                    <section class="checkout-standard-address">

                        <h2>Address</h2>
                        <p class="note">
                            Fields with an * are mandatory</p>


                        <div class="form-horizontal row">
                            <div class="checkout-standard-address-billing col-xs-12 col-xl">

                                <h3>Billing address</h3>



                                <div class="item-address item-new" data-option="null">
                                    <div class="header">
                                        <input id="ca_billingoption-new" type="radio" value="null"
                                            name="ca_billingoption" checked="checked">
                                        <label for="ca_billingoption-new" class="values value-new">
                                            new address</label>
                                    </div>
                                    <div class="form-list">
                                        <div class="row form-item form-group salutation optional">
                                            <div class="col-md-5">
                                                <label for="address-billing-salutation-">
                                                    Salutation</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="address-billing-salutation-"
                                                    name="ca_billing[order.base.address.salutation]">

                                                    <option value="">Select salutation</option>

                                                    <option value="" selected>
                                                    </option>
                                                    <option value="mr">
                                                        Mr</option>
                                                    <option value="ms">
                                                        Ms</option>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group firstname mandatory" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-billing-firstname-">
                                                    First name</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-billing-firstname-"
                                                    name="ca_billing[order.base.address.firstname]" value=""
                                                    placeholder="First name">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group lastname mandatory" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-billing-lastname-">
                                                    Last name</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-billing-lastname-"
                                                    name="ca_billing[order.base.address.lastname]" value=""
                                                    placeholder="Last name">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group company optional" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-billing-company-">
                                                    Company</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-billing-company-"
                                                    name="ca_billing[order.base.address.company]" value=""
                                                    placeholder="Company">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group address1 mandatory" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-billing-address1-">
                                                    Street</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-billing-address1-"
                                                    name="ca_billing[order.base.address.address1]" value=""
                                                    placeholder="Street">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group address2 optional" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-billing-address2-">
                                                    Additional</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-billing-address2-"
                                                    name="ca_billing[order.base.address.address2]" value=""
                                                    placeholder="Additional">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group address3 " data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-billing-address3-">
                                                    Additional 2</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-billing-address3-"
                                                    name="ca_billing[order.base.address.address3]" value=""
                                                    placeholder="Additional 2" disabled>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group city mandatory" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-billing-city-">
                                                    City</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" id="address-billing-city-"
                                                    name="ca_billing[order.base.address.city]" value=""
                                                    placeholder="City">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group postal mandatory" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-billing-postal-">
                                                    Postal code</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-billing-postal-"
                                                    name="ca_billing[order.base.address.postal]" value=""
                                                    placeholder="Postal code">
                                            </div>
                                        </div>




                                        <div class="row form-item form-group countryid optional">

                                            <div class="col-md-5">
                                                <label for="address-billing-countryid-">
                                                    Country</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="address-billing-countryid-"
                                                    name="ca_billing[order.base.address.countryid]">

                                                    <option value="">Select country</option>

                                                    <option value="AF">
                                                        Afghanistan</option>
                                                    <option value="AL">
                                                        Albania</option>
                                                    <option value="DZ">
                                                        Algeria</option>
                                                    <option value="AS">
                                                        American Samoa</option>
                                                    <option value="AD">
                                                        Andorra</option>
                                                    <option value="AO">
                                                        Angola</option>
                                                    <option value="AI">
                                                        Anguilla</option>
                                                    <option value="AQ">
                                                        Antarctica</option>
                                                    <option value="AG">
                                                        Antigua and Barbuda</option>
                                                    <option value="AR">
                                                        Argentina</option>
                                                    <option value="AM">
                                                        Armenia</option>
                                                    <option value="AW">
                                                        Aruba</option>
                                                    <option value="AU">
                                                        Australia</option>
                                                    <option value="AT">
                                                        Austria</option>
                                                    <option value="AZ">
                                                        Azerbaijan</option>
                                                    <option value="BS">
                                                        Bahamas</option>
                                                    <option value="BH">
                                                        Bahrain</option>
                                                    <option value="BD">
                                                        Bangladesh</option>
                                                    <option value="BB">
                                                        Barbados</option>
                                                    <option value="BY">
                                                        Belarus</option>
                                                    <option value="BE">
                                                        Belgium</option>
                                                    <option value="BZ">
                                                        Belize</option>
                                                    <option value="BJ">
                                                        Benin</option>
                                                    <option value="BM">
                                                        Bermuda</option>
                                                    <option value="BT">
                                                        Bhutan</option>
                                                    <option value="BO">
                                                        Bolivia, Plurinational State of</option>
                                                    <option value="BQ">
                                                        Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BA">
                                                        Bosnia and Herzegovina</option>
                                                    <option value="BW">
                                                        Botswana</option>
                                                    <option value="BV">
                                                        Bouvet Island</option>
                                                    <option value="BR">
                                                        Brazil</option>
                                                    <option value="IO">
                                                        British Indian Ocean Territory</option>
                                                    <option value="BN">
                                                        Brunei Darussalam</option>
                                                    <option value="BG">
                                                        Bulgaria</option>
                                                    <option value="BF">
                                                        Burkina Faso</option>
                                                    <option value="BI">
                                                        Burundi</option>
                                                    <option value="KH">
                                                        Cambodia</option>
                                                    <option value="CM">
                                                        Cameroon</option>
                                                    <option value="CA">
                                                        Canada</option>
                                                    <option value="CV">
                                                        Cape Verde</option>
                                                    <option value="KY">
                                                        Cayman Islands</option>
                                                    <option value="CF">
                                                        Central African Republic</option>
                                                    <option value="TD">
                                                        Chad</option>
                                                    <option value="CL">
                                                        Chile</option>
                                                    <option value="CN">
                                                        China</option>
                                                    <option value="CX">
                                                        Christmas Island</option>
                                                    <option value="CC">
                                                        Cocos (Keeling) Islands</option>
                                                    <option value="CO">
                                                        Colombia</option>
                                                    <option value="KM">
                                                        Comoros</option>
                                                    <option value="CG">
                                                        Congo</option>
                                                    <option value="CD">
                                                        Congo, the Democratic Republic of the</option>
                                                    <option value="CK">
                                                        Cook Islands</option>
                                                    <option value="CR">
                                                        Costa Rica</option>
                                                    <option value="HR">
                                                        Croatia</option>
                                                    <option value="CU">
                                                        Cuba</option>
                                                    <option value="CW">
                                                        Curaçao</option>
                                                    <option value="CY">
                                                        Cyprus</option>
                                                    <option value="CZ">
                                                        Czech Republic</option>
                                                    <option value="CI">
                                                        Côte d&#039;Ivoire</option>
                                                    <option value="DK">
                                                        Denmark</option>
                                                    <option value="DJ">
                                                        Djibouti</option>
                                                    <option value="DM">
                                                        Dominica</option>
                                                    <option value="DO">
                                                        Dominican Republic</option>
                                                    <option value="EC">
                                                        Ecuador</option>
                                                    <option value="EG">
                                                        Egypt</option>
                                                    <option value="SV">
                                                        El Salvador</option>
                                                    <option value="GQ">
                                                        Equatorial Guinea</option>
                                                    <option value="ER">
                                                        Eritrea</option>
                                                    <option value="EE">
                                                        Estonia</option>
                                                    <option value="ET">
                                                        Ethiopia</option>
                                                    <option value="FK">
                                                        Falkland Islands (Malvinas)</option>
                                                    <option value="FO">
                                                        Faroe Islands</option>
                                                    <option value="FJ">
                                                        Fiji</option>
                                                    <option value="FI">
                                                        Finland</option>
                                                    <option value="FR">
                                                        France</option>
                                                    <option value="GF">
                                                        French Guiana</option>
                                                    <option value="PF">
                                                        French Polynesia</option>
                                                    <option value="TF">
                                                        French Southern Territories</option>
                                                    <option value="GA">
                                                        Gabon</option>
                                                    <option value="GM">
                                                        Gambia</option>
                                                    <option value="GE">
                                                        Georgia</option>
                                                    <option value="DE">
                                                        Germany</option>
                                                    <option value="GH">
                                                        Ghana</option>
                                                    <option value="GI">
                                                        Gibraltar</option>
                                                    <option value="GR">
                                                        Greece</option>
                                                    <option value="GL">
                                                        Greenland</option>
                                                    <option value="GD">
                                                        Grenada</option>
                                                    <option value="GP">
                                                        Guadeloupe</option>
                                                    <option value="GU">
                                                        Guam</option>
                                                    <option value="GT">
                                                        Guatemala</option>
                                                    <option value="GG">
                                                        Guernsey</option>
                                                    <option value="GN">
                                                        Guinea</option>
                                                    <option value="GW">
                                                        Guinea-Bissau</option>
                                                    <option value="GY">
                                                        Guyana</option>
                                                    <option value="HT">
                                                        Haiti</option>
                                                    <option value="HM">
                                                        Heard Island and McDonald Islands</option>
                                                    <option value="HN">
                                                        Honduras</option>
                                                    <option value="HK">
                                                        Hong Kong</option>
                                                    <option value="HU">
                                                        Hungary</option>
                                                    <option value="IS">
                                                        Iceland</option>
                                                    <option value="IN">
                                                        India</option>
                                                    <option value="ID">
                                                        Indonesia</option>
                                                    <option value="IR">
                                                        Iran, Islamic Republic of</option>
                                                    <option value="IQ">
                                                        Iraq</option>
                                                    <option value="IE">
                                                        Ireland</option>
                                                    <option value="IM">
                                                        Isle of Man</option>
                                                    <option value="IL">
                                                        Israel</option>
                                                    <option value="IT">
                                                        Italy</option>
                                                    <option value="JM">
                                                        Jamaica</option>
                                                    <option value="JP">
                                                        Japan</option>
                                                    <option value="JE">
                                                        Jersey</option>
                                                    <option value="JO">
                                                        Jordan</option>
                                                    <option value="KZ">
                                                        Kazakhstan</option>
                                                    <option value="KE">
                                                        Kenya</option>
                                                    <option value="KI">
                                                        Kiribati</option>
                                                    <option value="KP">
                                                        Korea, Democratic People&#039;s Republic of</option>
                                                    <option value="KR">
                                                        Korea, Republic of</option>
                                                    <option value="XK">
                                                        Kosovo</option>
                                                    <option value="KW">
                                                        Kuwait</option>
                                                    <option value="KG">
                                                        Kyrgyzstan</option>
                                                    <option value="LA">
                                                        Lao People&#039;s Democratic Republic</option>
                                                    <option value="LV">
                                                        Latvia</option>
                                                    <option value="LB">
                                                        Lebanon</option>
                                                    <option value="LS">
                                                        Lesotho</option>
                                                    <option value="LR">
                                                        Liberia</option>
                                                    <option value="LY">
                                                        Libya</option>
                                                    <option value="LI">
                                                        Liechtenstein</option>
                                                    <option value="LT">
                                                        Lithuania</option>
                                                    <option value="LU">
                                                        Luxembourg</option>
                                                    <option value="MO">
                                                        Macao</option>
                                                    <option value="MK">
                                                        Macedonia</option>
                                                    <option value="MG">
                                                        Madagascar</option>
                                                    <option value="MW">
                                                        Malawi</option>
                                                    <option value="MY">
                                                        Malaysia</option>
                                                    <option value="MV">
                                                        Maldives</option>
                                                    <option value="ML">
                                                        Mali</option>
                                                    <option value="MT">
                                                        Malta</option>
                                                    <option value="MH">
                                                        Marshall Islands</option>
                                                    <option value="MQ">
                                                        Martinique</option>
                                                    <option value="MR">
                                                        Mauritania</option>
                                                    <option value="MU">
                                                        Mauritius</option>
                                                    <option value="YT">
                                                        Mayotte</option>
                                                    <option value="MX">
                                                        Mexico</option>
                                                    <option value="FM">
                                                        Micronesia, Federated States of</option>
                                                    <option value="MD">
                                                        Moldova, Republic of</option>
                                                    <option value="MC">
                                                        Monaco</option>
                                                    <option value="MN">
                                                        Mongolia</option>
                                                    <option value="ME">
                                                        Montenegro</option>
                                                    <option value="MS">
                                                        Montserrat</option>
                                                    <option value="MA">
                                                        Morocco</option>
                                                    <option value="MZ">
                                                        Mozambique</option>
                                                    <option value="MM">
                                                        Myanmar</option>
                                                    <option value="NA">
                                                        Namibia</option>
                                                    <option value="NR">
                                                        Nauru</option>
                                                    <option value="NP">
                                                        Nepal</option>
                                                    <option value="NL">
                                                        Netherlands</option>
                                                    <option value="NC">
                                                        New Caledonia</option>
                                                    <option value="NZ">
                                                        New Zealand</option>
                                                    <option value="NI">
                                                        Nicaragua</option>
                                                    <option value="NE">
                                                        Niger</option>
                                                    <option value="NG">
                                                        Nigeria</option>
                                                    <option value="NU">
                                                        Niue</option>
                                                    <option value="NF">
                                                        Norfolk Island</option>
                                                    <option value="MP">
                                                        Northern Mariana Islands</option>
                                                    <option value="NO">
                                                        Norway</option>
                                                    <option value="OM">
                                                        Oman</option>
                                                    <option value="PK">
                                                        Pakistan</option>
                                                    <option value="PW">
                                                        Palau</option>
                                                    <option value="PS">
                                                        Palestine, State of</option>
                                                    <option value="PA">
                                                        Panama</option>
                                                    <option value="PG">
                                                        Papua New Guinea</option>
                                                    <option value="PY">
                                                        Paraguay</option>
                                                    <option value="PE">
                                                        Peru</option>
                                                    <option value="PH">
                                                        Philippines</option>
                                                    <option value="PN">
                                                        Pitcairn</option>
                                                    <option value="PL">
                                                        Poland</option>
                                                    <option value="PT">
                                                        Portugal</option>
                                                    <option value="PR">
                                                        Puerto Rico</option>
                                                    <option value="QA">
                                                        Qatar</option>
                                                    <option value="RO">
                                                        Romania</option>
                                                    <option value="RU">
                                                        Russian Federation</option>
                                                    <option value="RW">
                                                        Rwanda</option>
                                                    <option value="RE">
                                                        Réunion</option>
                                                    <option value="BL">
                                                        Saint Barthélemy</option>
                                                    <option value="SH">
                                                        Saint Helena, Ascension and Tristan da Cunha</option>
                                                    <option value="KN">
                                                        Saint Kitts and Nevis</option>
                                                    <option value="LC">
                                                        Saint Lucia</option>
                                                    <option value="MF">
                                                        Saint Martin (French part)</option>
                                                    <option value="PM">
                                                        Saint Pierre and Miquelon</option>
                                                    <option value="VC">
                                                        Saint Vincent and the Grenadines</option>
                                                    <option value="WS">
                                                        Samoa</option>
                                                    <option value="SM">
                                                        San Marino</option>
                                                    <option value="ST">
                                                        Sao Tome and Principe</option>
                                                    <option value="SA">
                                                        Saudi Arabia</option>
                                                    <option value="SN">
                                                        Senegal</option>
                                                    <option value="RS">
                                                        Serbia</option>
                                                    <option value="SC">
                                                        Seychelles</option>
                                                    <option value="SL">
                                                        Sierra Leone</option>
                                                    <option value="SG">
                                                        Singapore</option>
                                                    <option value="SX">
                                                        Sint Maarten (Dutch part)</option>
                                                    <option value="SK">
                                                        Slovakia</option>
                                                    <option value="SI">
                                                        Slovenia</option>
                                                    <option value="SB">
                                                        Solomon Islands</option>
                                                    <option value="SO">
                                                        Somalia</option>
                                                    <option value="ZA">
                                                        South Africa</option>
                                                    <option value="GS">
                                                        South Georgia and the South Sandwich Islands</option>
                                                    <option value="SS">
                                                        South Sudan</option>
                                                    <option value="ES">
                                                        Spain</option>
                                                    <option value="LK">
                                                        Sri Lanka</option>
                                                    <option value="SD">
                                                        Sudan</option>
                                                    <option value="SR">
                                                        Suriname</option>
                                                    <option value="SJ">
                                                        Svalbard and Jan Mayen</option>
                                                    <option value="SZ">
                                                        Swaziland</option>
                                                    <option value="SE">
                                                        Sweden</option>
                                                    <option value="CH">
                                                        Switzerland</option>
                                                    <option value="SY">
                                                        Syrian Arab Republic</option>
                                                    <option value="TW">
                                                        Taiwan</option>
                                                    <option value="TJ">
                                                        Tajikistan</option>
                                                    <option value="TZ">
                                                        Tanzania, United Republic of</option>
                                                    <option value="TH">
                                                        Thailand</option>
                                                    <option value="TL">
                                                        Timor-Leste</option>
                                                    <option value="TG">
                                                        Togo</option>
                                                    <option value="TK">
                                                        Tokelau</option>
                                                    <option value="TO">
                                                        Tonga</option>
                                                    <option value="TT">
                                                        Trinidad and Tobago</option>
                                                    <option value="TN">
                                                        Tunisia</option>
                                                    <option value="TR">
                                                        Turkey</option>
                                                    <option value="TM">
                                                        Turkmenistan</option>
                                                    <option value="TC">
                                                        Turks and Caicos Islands</option>
                                                    <option value="TV">
                                                        Tuvalu</option>
                                                    <option value="UG">
                                                        Uganda</option>
                                                    <option value="UA">
                                                        Ukraine</option>
                                                    <option value="AE">
                                                        United Arab Emirates</option>
                                                    <option value="GB">
                                                        United Kingdom</option>
                                                    <option value="US">
                                                        United States</option>
                                                    <option value="UM">
                                                        United States Minor Outlying Islands</option>
                                                    <option value="UY">
                                                        Uruguay</option>
                                                    <option value="UZ">
                                                        Uzbekistan</option>
                                                    <option value="VU">
                                                        Vanuatu</option>
                                                    <option value="VA">
                                                        Vatican City State (Holy See)</option>
                                                    <option value="VE">
                                                        Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN">
                                                        Viet Nam</option>
                                                    <option value="VG">
                                                        Virgin Islands, British</option>
                                                    <option value="VI">
                                                        Virgin Islands, U.S.</option>
                                                    <option value="WF">
                                                        Wallis and Futuna</option>
                                                    <option value="EH">
                                                        Western Sahara</option>
                                                    <option value="YE">
                                                        Yemen</option>
                                                    <option value="ZM">
                                                        Zambia</option>
                                                    <option value="ZW">
                                                        Zimbabwe</option>
                                                    <option value="AX">
                                                        Åland Islands</option>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group languageid mandatory">

                                            <div class="col-md-5">
                                                <label for="address-billing-languageid-">
                                                    Language</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="address-billing-languageid-"
                                                    name="ca_billing[order.base.address.languageid]">

                                                    <option value="">Select language</option>

                                                    <option value="en" selected>
                                                        English</option>
                                                    <option value="de">
                                                        German</option>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group vatid optional" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-billing-vatid-">
                                                    Vat ID</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-billing-vatid-"
                                                    name="ca_billing[order.base.address.vatid]" value=""
                                                    placeholder="GB999999973">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group email mandatory"
                                            data-regex="^.+@[a-zA-Z0-9\-]+(\.[a-zA-Z0-9\-]+)*$">

                                            <div class="col-md-5">
                                                <label for="address-billing-email-">
                                                    E-Mail</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="email"
                                                    id="address-billing-email-"
                                                    name="ca_billing[order.base.address.email]" value=""
                                                    placeholder="name@example.com">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group telephone " data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-billing-telephone-">
                                                    Telephone</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="tel"
                                                    id="address-billing-telephone-"
                                                    name="ca_billing[order.base.address.telephone]" value=""
                                                    placeholder="+1 123 456 7890" disabled>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group telefax " data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-billing-telefax-">
                                                    Fax</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="tel"
                                                    id="address-billing-telefax-"
                                                    name="ca_billing[order.base.address.telefax]" value=""
                                                    placeholder="+1 123 456 7890" disabled>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group website "
                                            data-regex="^([a-z]+://)?[a-zA-Z0-9\-]+(\.[a-zA-Z0-9\-]+)+(:[0-9]+)?(/.*)?$">

                                            <div class="col-md-5">
                                                <label for="address-billing-website-">
                                                    Web site</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="url"
                                                    id="address-billing-website-"
                                                    name="ca_billing[order.base.address.website]" value=""
                                                    placeholder="https://example.com" disabled>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group birthday ">

                                            <div class="col-md-5">
                                                <label for="address-billing-birthday-">
                                                    Birthday</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="date"
                                                    id="address-billing-birthday-"
                                                    name="ca_billing[order.base.address.birthday]" value="">
                                            </div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="checkout-standard-address-delivery col-xs-12 col-xl">

                                <h3>Delivery address</h3>

                                <div class="item-address item-like">
                                    <div class="header">
                                        <input id="ca_deliveryoption-like" type="radio" value="like"
                                            name="ca_deliveryoption" checked="checked">
                                        <label for="ca_deliveryoption-like" class="values value-like">
                                            like billing address</label>
                                    </div>
                                </div>





                                <div class="item-address item-new" data-option="like">
                                    <div class="header">
                                        <input id="ca_deliveryoption-null" type="radio" value="null"
                                            name="ca_deliveryoption">
                                        <label for="ca_deliveryoption-null" class="values value-new">
                                            new address</label>
                                    </div>

                                    <div class="form-list">
                                        <div class="row form-item form-group salutation optional">
                                            <div class="col-md-5">
                                                <label for="address-delivery-salutation-">
                                                    Salutation</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="address-delivery-salutation-"
                                                    name="ca_delivery[order.base.address.salutation]">

                                                    <option value="">Select salutation</option>

                                                    <option value="" selected>
                                                    </option>
                                                    <option value="mr">
                                                        Mr</option>
                                                    <option value="ms">
                                                        Ms</option>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group firstname mandatory" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-delivery-firstname-">
                                                    First name</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-delivery-firstname-"
                                                    name="ca_delivery[order.base.address.firstname]" value=""
                                                    placeholder="First name">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group lastname mandatory" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-delivery-lastname-">
                                                    Last name</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-delivery-lastname-"
                                                    name="ca_delivery[order.base.address.lastname]" value=""
                                                    placeholder="Last name">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group company optional" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-delivery-company-">
                                                    Company</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-delivery-company-"
                                                    name="ca_delivery[order.base.address.company]" value=""
                                                    placeholder="Company">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group address1 mandatory" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-delivery-address1-">
                                                    Street</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-delivery-address1-"
                                                    name="ca_delivery[order.base.address.address1]" value=""
                                                    placeholder="Street">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group address2 optional" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-delivery-address2-">
                                                    Additional</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-delivery-address2-"
                                                    name="ca_delivery[order.base.address.address2]" value=""
                                                    placeholder="Additional">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group address3 " data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-delivery-address3-">
                                                    Additional 2</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-delivery-address3-"
                                                    name="ca_delivery[order.base.address.address3]" value=""
                                                    placeholder="Additional 2" disabled>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group city mandatory" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-delivery-city-">
                                                    City</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-delivery-city-"
                                                    name="ca_delivery[order.base.address.city]" value=""
                                                    placeholder="City">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group postal mandatory" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-delivery-postal-">
                                                    Postal code</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-delivery-postal-"
                                                    name="ca_delivery[order.base.address.postal]" value=""
                                                    placeholder="Postal code">
                                            </div>
                                        </div>




                                        <div class="row form-item form-group countryid optional">

                                            <div class="col-md-5">
                                                <label for="address-delivery-countryid-">
                                                    Country</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="address-delivery-countryid-"
                                                    name="ca_delivery[order.base.address.countryid]">

                                                    <option value="">Select country</option>

                                                    <option value="AF">
                                                        Afghanistan</option>
                                                    <option value="AL">
                                                        Albania</option>
                                                    <option value="DZ">
                                                        Algeria</option>
                                                    <option value="AS">
                                                        American Samoa</option>
                                                    <option value="AD">
                                                        Andorra</option>
                                                    <option value="AO">
                                                        Angola</option>
                                                    <option value="AI">
                                                        Anguilla</option>
                                                    <option value="AQ">
                                                        Antarctica</option>
                                                    <option value="AG">
                                                        Antigua and Barbuda</option>
                                                    <option value="AR">
                                                        Argentina</option>
                                                    <option value="AM">
                                                        Armenia</option>
                                                    <option value="AW">
                                                        Aruba</option>
                                                    <option value="AU">
                                                        Australia</option>
                                                    <option value="AT">
                                                        Austria</option>
                                                    <option value="AZ">
                                                        Azerbaijan</option>
                                                    <option value="BS">
                                                        Bahamas</option>
                                                    <option value="BH">
                                                        Bahrain</option>
                                                    <option value="BD">
                                                        Bangladesh</option>
                                                    <option value="BB">
                                                        Barbados</option>
                                                    <option value="BY">
                                                        Belarus</option>
                                                    <option value="BE">
                                                        Belgium</option>
                                                    <option value="BZ">
                                                        Belize</option>
                                                    <option value="BJ">
                                                        Benin</option>
                                                    <option value="BM">
                                                        Bermuda</option>
                                                    <option value="BT">
                                                        Bhutan</option>
                                                    <option value="BO">
                                                        Bolivia, Plurinational State of</option>
                                                    <option value="BQ">
                                                        Bonaire, Sint Eustatius and Saba</option>
                                                    <option value="BA">
                                                        Bosnia and Herzegovina</option>
                                                    <option value="BW">
                                                        Botswana</option>
                                                    <option value="BV">
                                                        Bouvet Island</option>
                                                    <option value="BR">
                                                        Brazil</option>
                                                    <option value="IO">
                                                        British Indian Ocean Territory</option>
                                                    <option value="BN">
                                                        Brunei Darussalam</option>
                                                    <option value="BG">
                                                        Bulgaria</option>
                                                    <option value="BF">
                                                        Burkina Faso</option>
                                                    <option value="BI">
                                                        Burundi</option>
                                                    <option value="KH">
                                                        Cambodia</option>
                                                    <option value="CM">
                                                        Cameroon</option>
                                                    <option value="CA">
                                                        Canada</option>
                                                    <option value="CV">
                                                        Cape Verde</option>
                                                    <option value="KY">
                                                        Cayman Islands</option>
                                                    <option value="CF">
                                                        Central African Republic</option>
                                                    <option value="TD">
                                                        Chad</option>
                                                    <option value="CL">
                                                        Chile</option>
                                                    <option value="CN">
                                                        China</option>
                                                    <option value="CX">
                                                        Christmas Island</option>
                                                    <option value="CC">
                                                        Cocos (Keeling) Islands</option>
                                                    <option value="CO">
                                                        Colombia</option>
                                                    <option value="KM">
                                                        Comoros</option>
                                                    <option value="CG">
                                                        Congo</option>
                                                    <option value="CD">
                                                        Congo, the Democratic Republic of the</option>
                                                    <option value="CK">
                                                        Cook Islands</option>
                                                    <option value="CR">
                                                        Costa Rica</option>
                                                    <option value="HR">
                                                        Croatia</option>
                                                    <option value="CU">
                                                        Cuba</option>
                                                    <option value="CW">
                                                        Curaçao</option>
                                                    <option value="CY">
                                                        Cyprus</option>
                                                    <option value="CZ">
                                                        Czech Republic</option>
                                                    <option value="CI">
                                                        Côte d&#039;Ivoire</option>
                                                    <option value="DK">
                                                        Denmark</option>
                                                    <option value="DJ">
                                                        Djibouti</option>
                                                    <option value="DM">
                                                        Dominica</option>
                                                    <option value="DO">
                                                        Dominican Republic</option>
                                                    <option value="EC">
                                                        Ecuador</option>
                                                    <option value="EG">
                                                        Egypt</option>
                                                    <option value="SV">
                                                        El Salvador</option>
                                                    <option value="GQ">
                                                        Equatorial Guinea</option>
                                                    <option value="ER">
                                                        Eritrea</option>
                                                    <option value="EE">
                                                        Estonia</option>
                                                    <option value="ET">
                                                        Ethiopia</option>
                                                    <option value="FK">
                                                        Falkland Islands (Malvinas)</option>
                                                    <option value="FO">
                                                        Faroe Islands</option>
                                                    <option value="FJ">
                                                        Fiji</option>
                                                    <option value="FI">
                                                        Finland</option>
                                                    <option value="FR">
                                                        France</option>
                                                    <option value="GF">
                                                        French Guiana</option>
                                                    <option value="PF">
                                                        French Polynesia</option>
                                                    <option value="TF">
                                                        French Southern Territories</option>
                                                    <option value="GA">
                                                        Gabon</option>
                                                    <option value="GM">
                                                        Gambia</option>
                                                    <option value="GE">
                                                        Georgia</option>
                                                    <option value="DE">
                                                        Germany</option>
                                                    <option value="GH">
                                                        Ghana</option>
                                                    <option value="GI">
                                                        Gibraltar</option>
                                                    <option value="GR">
                                                        Greece</option>
                                                    <option value="GL">
                                                        Greenland</option>
                                                    <option value="GD">
                                                        Grenada</option>
                                                    <option value="GP">
                                                        Guadeloupe</option>
                                                    <option value="GU">
                                                        Guam</option>
                                                    <option value="GT">
                                                        Guatemala</option>
                                                    <option value="GG">
                                                        Guernsey</option>
                                                    <option value="GN">
                                                        Guinea</option>
                                                    <option value="GW">
                                                        Guinea-Bissau</option>
                                                    <option value="GY">
                                                        Guyana</option>
                                                    <option value="HT">
                                                        Haiti</option>
                                                    <option value="HM">
                                                        Heard Island and McDonald Islands</option>
                                                    <option value="HN">
                                                        Honduras</option>
                                                    <option value="HK">
                                                        Hong Kong</option>
                                                    <option value="HU">
                                                        Hungary</option>
                                                    <option value="IS">
                                                        Iceland</option>
                                                    <option value="IN">
                                                        India</option>
                                                    <option value="ID">
                                                        Indonesia</option>
                                                    <option value="IR">
                                                        Iran, Islamic Republic of</option>
                                                    <option value="IQ">
                                                        Iraq</option>
                                                    <option value="IE">
                                                        Ireland</option>
                                                    <option value="IM">
                                                        Isle of Man</option>
                                                    <option value="IL">
                                                        Israel</option>
                                                    <option value="IT">
                                                        Italy</option>
                                                    <option value="JM">
                                                        Jamaica</option>
                                                    <option value="JP">
                                                        Japan</option>
                                                    <option value="JE">
                                                        Jersey</option>
                                                    <option value="JO">
                                                        Jordan</option>
                                                    <option value="KZ">
                                                        Kazakhstan</option>
                                                    <option value="KE">
                                                        Kenya</option>
                                                    <option value="KI">
                                                        Kiribati</option>
                                                    <option value="KP">
                                                        Korea, Democratic People&#039;s Republic of</option>
                                                    <option value="KR">
                                                        Korea, Republic of</option>
                                                    <option value="XK">
                                                        Kosovo</option>
                                                    <option value="KW">
                                                        Kuwait</option>
                                                    <option value="KG">
                                                        Kyrgyzstan</option>
                                                    <option value="LA">
                                                        Lao People&#039;s Democratic Republic</option>
                                                    <option value="LV">
                                                        Latvia</option>
                                                    <option value="LB">
                                                        Lebanon</option>
                                                    <option value="LS">
                                                        Lesotho</option>
                                                    <option value="LR">
                                                        Liberia</option>
                                                    <option value="LY">
                                                        Libya</option>
                                                    <option value="LI">
                                                        Liechtenstein</option>
                                                    <option value="LT">
                                                        Lithuania</option>
                                                    <option value="LU">
                                                        Luxembourg</option>
                                                    <option value="MO">
                                                        Macao</option>
                                                    <option value="MK">
                                                        Macedonia</option>
                                                    <option value="MG">
                                                        Madagascar</option>
                                                    <option value="MW">
                                                        Malawi</option>
                                                    <option value="MY">
                                                        Malaysia</option>
                                                    <option value="MV">
                                                        Maldives</option>
                                                    <option value="ML">
                                                        Mali</option>
                                                    <option value="MT">
                                                        Malta</option>
                                                    <option value="MH">
                                                        Marshall Islands</option>
                                                    <option value="MQ">
                                                        Martinique</option>
                                                    <option value="MR">
                                                        Mauritania</option>
                                                    <option value="MU">
                                                        Mauritius</option>
                                                    <option value="YT">
                                                        Mayotte</option>
                                                    <option value="MX">
                                                        Mexico</option>
                                                    <option value="FM">
                                                        Micronesia, Federated States of</option>
                                                    <option value="MD">
                                                        Moldova, Republic of</option>
                                                    <option value="MC">
                                                        Monaco</option>
                                                    <option value="MN">
                                                        Mongolia</option>
                                                    <option value="ME">
                                                        Montenegro</option>
                                                    <option value="MS">
                                                        Montserrat</option>
                                                    <option value="MA">
                                                        Morocco</option>
                                                    <option value="MZ">
                                                        Mozambique</option>
                                                    <option value="MM">
                                                        Myanmar</option>
                                                    <option value="NA">
                                                        Namibia</option>
                                                    <option value="NR">
                                                        Nauru</option>
                                                    <option value="NP">
                                                        Nepal</option>
                                                    <option value="NL">
                                                        Netherlands</option>
                                                    <option value="NC">
                                                        New Caledonia</option>
                                                    <option value="NZ">
                                                        New Zealand</option>
                                                    <option value="NI">
                                                        Nicaragua</option>
                                                    <option value="NE">
                                                        Niger</option>
                                                    <option value="NG">
                                                        Nigeria</option>
                                                    <option value="NU">
                                                        Niue</option>
                                                    <option value="NF">
                                                        Norfolk Island</option>
                                                    <option value="MP">
                                                        Northern Mariana Islands</option>
                                                    <option value="NO">
                                                        Norway</option>
                                                    <option value="OM">
                                                        Oman</option>
                                                    <option value="PK">
                                                        Pakistan</option>
                                                    <option value="PW">
                                                        Palau</option>
                                                    <option value="PS">
                                                        Palestine, State of</option>
                                                    <option value="PA">
                                                        Panama</option>
                                                    <option value="PG">
                                                        Papua New Guinea</option>
                                                    <option value="PY">
                                                        Paraguay</option>
                                                    <option value="PE">
                                                        Peru</option>
                                                    <option value="PH">
                                                        Philippines</option>
                                                    <option value="PN">
                                                        Pitcairn</option>
                                                    <option value="PL">
                                                        Poland</option>
                                                    <option value="PT">
                                                        Portugal</option>
                                                    <option value="PR">
                                                        Puerto Rico</option>
                                                    <option value="QA">
                                                        Qatar</option>
                                                    <option value="RO">
                                                        Romania</option>
                                                    <option value="RU">
                                                        Russian Federation</option>
                                                    <option value="RW">
                                                        Rwanda</option>
                                                    <option value="RE">
                                                        Réunion</option>
                                                    <option value="BL">
                                                        Saint Barthélemy</option>
                                                    <option value="SH">
                                                        Saint Helena, Ascension and Tristan da Cunha</option>
                                                    <option value="KN">
                                                        Saint Kitts and Nevis</option>
                                                    <option value="LC">
                                                        Saint Lucia</option>
                                                    <option value="MF">
                                                        Saint Martin (French part)</option>
                                                    <option value="PM">
                                                        Saint Pierre and Miquelon</option>
                                                    <option value="VC">
                                                        Saint Vincent and the Grenadines</option>
                                                    <option value="WS">
                                                        Samoa</option>
                                                    <option value="SM">
                                                        San Marino</option>
                                                    <option value="ST">
                                                        Sao Tome and Principe</option>
                                                    <option value="SA">
                                                        Saudi Arabia</option>
                                                    <option value="SN">
                                                        Senegal</option>
                                                    <option value="RS">
                                                        Serbia</option>
                                                    <option value="SC">
                                                        Seychelles</option>
                                                    <option value="SL">
                                                        Sierra Leone</option>
                                                    <option value="SG">
                                                        Singapore</option>
                                                    <option value="SX">
                                                        Sint Maarten (Dutch part)</option>
                                                    <option value="SK">
                                                        Slovakia</option>
                                                    <option value="SI">
                                                        Slovenia</option>
                                                    <option value="SB">
                                                        Solomon Islands</option>
                                                    <option value="SO">
                                                        Somalia</option>
                                                    <option value="ZA">
                                                        South Africa</option>
                                                    <option value="GS">
                                                        South Georgia and the South Sandwich Islands</option>
                                                    <option value="SS">
                                                        South Sudan</option>
                                                    <option value="ES">
                                                        Spain</option>
                                                    <option value="LK">
                                                        Sri Lanka</option>
                                                    <option value="SD">
                                                        Sudan</option>
                                                    <option value="SR">
                                                        Suriname</option>
                                                    <option value="SJ">
                                                        Svalbard and Jan Mayen</option>
                                                    <option value="SZ">
                                                        Swaziland</option>
                                                    <option value="SE">
                                                        Sweden</option>
                                                    <option value="CH">
                                                        Switzerland</option>
                                                    <option value="SY">
                                                        Syrian Arab Republic</option>
                                                    <option value="TW">
                                                        Taiwan</option>
                                                    <option value="TJ">
                                                        Tajikistan</option>
                                                    <option value="TZ">
                                                        Tanzania, United Republic of</option>
                                                    <option value="TH">
                                                        Thailand</option>
                                                    <option value="TL">
                                                        Timor-Leste</option>
                                                    <option value="TG">
                                                        Togo</option>
                                                    <option value="TK">
                                                        Tokelau</option>
                                                    <option value="TO">
                                                        Tonga</option>
                                                    <option value="TT">
                                                        Trinidad and Tobago</option>
                                                    <option value="TN">
                                                        Tunisia</option>
                                                    <option value="TR">
                                                        Turkey</option>
                                                    <option value="TM">
                                                        Turkmenistan</option>
                                                    <option value="TC">
                                                        Turks and Caicos Islands</option>
                                                    <option value="TV">
                                                        Tuvalu</option>
                                                    <option value="UG">
                                                        Uganda</option>
                                                    <option value="UA">
                                                        Ukraine</option>
                                                    <option value="AE">
                                                        United Arab Emirates</option>
                                                    <option value="GB">
                                                        United Kingdom</option>
                                                    <option value="US">
                                                        United States</option>
                                                    <option value="UM">
                                                        United States Minor Outlying Islands</option>
                                                    <option value="UY">
                                                        Uruguay</option>
                                                    <option value="UZ">
                                                        Uzbekistan</option>
                                                    <option value="VU">
                                                        Vanuatu</option>
                                                    <option value="VA">
                                                        Vatican City State (Holy See)</option>
                                                    <option value="VE">
                                                        Venezuela, Bolivarian Republic of</option>
                                                    <option value="VN">
                                                        Viet Nam</option>
                                                    <option value="VG">
                                                        Virgin Islands, British</option>
                                                    <option value="VI">
                                                        Virgin Islands, U.S.</option>
                                                    <option value="WF">
                                                        Wallis and Futuna</option>
                                                    <option value="EH">
                                                        Western Sahara</option>
                                                    <option value="YE">
                                                        Yemen</option>
                                                    <option value="ZM">
                                                        Zambia</option>
                                                    <option value="ZW">
                                                        Zimbabwe</option>
                                                    <option value="AX">
                                                        Åland Islands</option>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group languageid mandatory">

                                            <div class="col-md-5">
                                                <label for="address-delivery-languageid-">
                                                    Language</label>
                                            </div>
                                            <div class="col-md-7">
                                                <select class="form-control" id="address-delivery-languageid-"
                                                    name="ca_delivery[order.base.address.languageid]">

                                                    <option value="">Select language</option>

                                                    <option value="en" selected>
                                                        English</option>
                                                    <option value="de">
                                                        German</option>

                                                </select>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group vatid optional" data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-delivery-vatid-">
                                                    Vat ID</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"
                                                    id="address-delivery-vatid-"
                                                    name="ca_delivery[order.base.address.vatid]" value=""
                                                    placeholder="GB999999973">
                                            </div>
                                        </div>


                                        <div class="row form-item form-group email "
                                            data-regex="^.+@[a-zA-Z0-9\-]+(\.[a-zA-Z0-9\-]+)*$">

                                            <div class="col-md-5">
                                                <label for="address-delivery-email-">
                                                    E-Mail</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="email"
                                                    id="address-delivery-email-"
                                                    name="ca_delivery[order.base.address.email]" value=""
                                                    placeholder="name@example.com" disabled>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group telephone " data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-delivery-telephone-">
                                                    Telephone</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="tel"
                                                    id="address-delivery-telephone-"
                                                    name="ca_delivery[order.base.address.telephone]" value=""
                                                    placeholder="+1 123 456 7890" disabled>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group telefax " data-regex="">

                                            <div class="col-md-5">
                                                <label for="address-delivery-telefax-">
                                                    Fax</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="tel"
                                                    id="address-delivery-telefax-"
                                                    name="ca_delivery[order.base.address.telefax]" value=""
                                                    placeholder="+1 123 456 7890" disabled>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group website "
                                            data-regex="^([a-z]+://)?[a-zA-Z0-9\-]+(\.[a-zA-Z0-9\-]+)+(:[0-9]+)?(/.*)?$">

                                            <div class="col-md-5">
                                                <label for="address-delivery-website-">
                                                    Web site</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="url"
                                                    id="address-delivery-website-"
                                                    name="ca_delivery[order.base.address.website]" value=""
                                                    placeholder="https://example.com" disabled>
                                            </div>
                                        </div>


                                        <div class="row form-item form-group birthday ">

                                            <div class="col-md-5">
                                                <label for="address-delivery-birthday-">
                                                    Birthday</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input class="form-control" type="date"
                                                    id="address-delivery-birthday-"
                                                    name="ca_delivery[order.base.address.birthday]" value="">
                                            </div>
                                        </div>

                                        <div class="row form-item form-group store ">
                                            <label class="col-md-5" for="address-delivery-store">
                                                Don't store address</label>
                                            <div class="col-md-7">
                                                <input class="custom-control custom-checkbox" type="checkbox"
                                                    value="1" name="ca_delivery[nostore]">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>


                        <div class="button-group">
                            <a class="btn btn-default btn-lg btn-back" href="/shop/basket">
                                Previous</a>
                            <button class="btn btn-primary btn-lg btn-action">
                                Next</button>
                        </div>

                    </section>
                </form>
            </section>
        </div>
    </div>


    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-sm-6 footer-left">
                            <div class="footer-block">
                                <h2 class="pb-3">LEGAL</h2>
                                <p><a href="http://127.0.0.1:9000/p/terms">Terms &amp; Conditions</a></p>
                                <p><a href="http://127.0.0.1:9000/p/privacy">Privacy Notice</a></p>
                                <p><a href="http://127.0.0.1:9000/p/cancel">Cancellation</a></p>
                            </div>
                        </div>
                        <div class="col-sm-6 footer-center">
                            <div class="footer-block">
                                <h2 class="pb-3">ABOUT US</h2>
                                <p><a href="http://127.0.0.1:9000/p/contact">Contact us</a></p>
                                <p><a href="http://127.0.0.1:9000/p/about">Company</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 footer-right">
                    <div class="footer-block">
                        <a class="logo" href="/" title="Logo">
                            <img src="http://127.0.0.1:9000/aimeos/../vendor/shop/themes/default/assets/logo.png"
                                height="40" alt="Logo">
                        </a>
                        <div class="social">
                            <p><a href="#" class="sm facebook" title="Facebook"
                                    rel="noopener">Facebook</a></p>
                            <p><a href="#" class="sm twitter" title="Twitter" rel="noopener">Twitter</a>
                            </p>
                            <p><a href="#" class="sm instagram" title="Instagram"
                                    rel="noopener">Instagram</a></p>
                            <p><a href="#" class="sm youtube" title="Youtube" rel="noopener">Youtube</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <a id="toTop" class="back-to-top" href="#" title="Back to top">
        <div class="top-icon"></div>
    </a>

    <!-- Scripts -->
    <script src="{{asset('default/app.js?v=1')}}"></script>
    <script src="{{asset('default/aimeos.js?v=1')}}"></script>
</body>

</html>
