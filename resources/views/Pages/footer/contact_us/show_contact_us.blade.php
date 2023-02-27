@extends('cutetotoro::base')
@section('content')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manjari:wght@100;700&display=swap" rel="stylesheet">
    <div class="container page-wrapper" style="font-family: 'Manjari', sans-serif;">
        <div class="col-inner">
            <p>
                Thank you for your interest in our products. Perhaps there is a product that we don’t have? Feel free to contact us as we can custom make on request. We also offer tours of our manufacturing facilities.Please include your order number to ensure prompt response from us
            </p>
            <div class="wpforms-container wpforms-container-full" id="wpforms-339">
                <form id="wpforms-form-339" class="wpforms-validate wpforms-form" data-formid="339" method="post" enctype="multipart/form-data" action="/contact-us/" data-token="6353e259b5fdd23032008187d9744a85" novalidate="novalidate">
                    <noscript class="wpforms-error-noscript">
                        Please enable JavaScript in your browser to complete this form.
                    </noscript>
                    <div class="wpforms-field-container">
                        <div id="wpforms-339-field_0-container" class="wpforms-field wpforms-field-name" data-field-id="0">
                            <label class="wpforms-field-label" for="wpforms-339-field_0">
                                Name
                                <span class="wpforms-required-label">*</span>
                            </label><div class="wpforms-field-row wpforms-field-medium">
                                <div class="wpforms-field-row-block wpforms-first wpforms-one-half">
                                    <label for="wpforms-339-field_0" class="wpforms-field-sublabel after wpforms-sublabel-hide">First</label>
                                    <input style="font-family: 'Manjari', sans-serif;" type="text" id="wpforms-339-field_0" class="wpforms-field-name-first wpforms-field-required" name="wpforms[fields][0][first]" placeholder="First Name" required="">

                                </div>
                                <div class="wpforms-field-row-block wpforms-one-half">
                                    <label for="wpforms-339-field_0-last" class="wpforms-field-sublabel after wpforms-sublabel-hide">Last</label>
                                    <input style="font-family: 'Manjari', sans-serif;" type="text" id="wpforms-339-field_0-last" class="wpforms-field-name-last wpforms-field-required" name="wpforms[fields][0][last]" placeholder="Last Name" required="">

                                </div>
                            </div>
                        </div>
                        <div id="wpforms-339-field_1-container" class="wpforms-field wpforms-field-email" data-field-id="1">
                            <label class="wpforms-field-label" for="wpforms-339-field_1">Email <span class="wpforms-required-label">*</span></label>
                            <input style="font-family: 'Manjari', sans-serif;" type="email" id="wpforms-339-field_1" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][1]" required="">
                        </div>
                        <div id="wpforms-339-field_2-container" class="wpforms-field wpforms-field-textarea" data-field-id="2">
                            <label class="wpforms-field-label" for="wpforms-339-field_2">Comment or Message <span class="wpforms-required-label">*</span></label>
                            <textarea id="wpforms-339-field_2" class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][2]" required=""></textarea>
                        </div>
                    </div>
                    <div class="wpforms-recaptcha-container wpforms-is-hcaptcha">
                        <div class="g-recaptcha" data-sitekey="e09a0019-9d2e-460a-9052-62952c2a9cb8" data-recaptcha-id="0kvrqz8sf6vf">
                            <iframe src="https://newassets.hcaptcha.com/captcha/v1/a0e2c1c/static/hcaptcha.html#frame=checkbox&amp;id=0kvrqz8sf6vf&amp;host=cutetotoro.com&amp;sentry=true&amp;reportapi=https%3A%2F%2Faccounts.hcaptcha.com&amp;recaptchacompat=true&amp;custom=false&amp;hl=en&amp;tplinks=on&amp;sitekey=e09a0019-9d2e-460a-9052-62952c2a9cb8&amp;theme=light&amp;origin=https%3A%2F%2Fcutetotoro.com" tabindex="0" frameborder="0" scrolling="no" title="Widget containing checkbox for hCaptcha security challenge" data-hcaptcha-widget-id="0kvrqz8sf6vf" data-hcaptcha-response="" style="width: 303px; height: 78px; overflow: hidden;"></iframe>
                            <textarea id="g-recaptcha-response-0kvrqz8sf6vf" name="g-recaptcha-response" style="display: none;"></textarea>
                            <textarea id="h-captcha-response-0kvrqz8sf6vf" name="h-captcha-response" style="display: none;"></textarea>
                        </div>
                        <input type="text" name="g-recaptcha-hidden" class="wpforms-recaptcha-hidden" style="position:absolute!important;clip:rect(0,0,0,0)!important;height:1px!important;width:1px!important;border:0!important;overflow:hidden!important;padding:0!important;margin:0!important;" required="">
                    </div>
                    <div class="wpforms-submit-container"><input type="hidden" name="wpforms[id]" value="339"><input type="hidden" name="wpforms[author]" value="1">
                        <input type="hidden" name="wpforms[post_id]" value="19">
                        <button type="submit" name="wpforms[submit]" id="wpforms-submit-339" class="wpforms-submit" data-alt-text="Sending..." data-submit-text="Submit" aria-live="assertive" value="wpforms-submit"><p style="font-family: 'Manjari', sans-serif;">Submit</p></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
<style>
    @import url('https://fonts.googleapis.com/css2?family=Manjari:wght@100;700&display=swap');
    input{
        font-family: 'Manjari', sans-serif;
    }
    .page-wrapper {
        padding-bottom: 30px;
        padding-top: 30px;
    }
    div.wpforms-container-full .wpforms-form .wpforms-required-label {
        color: #ff0000;
        font-weight: 400;
    }
    @media screen and (min-width: 850px) {
        .col:first-child .col-inner {
            margin-left: auto;
            margin-right: 0;
        }
    }
    .col-inner {
        background-position: 50% 50%;
        background-repeat: no-repeat;
        background-size: cover;
        flex: 1 0 auto;
        margin-left: auto;
        margin-right: auto;
        position: relative;
        width: 100%;
    }
    div.wpforms-container-full {
        margin: 24px auto;
    }
    div.wpforms-container-full {
        margin-left: auto;
        margin-right: auto;
    }
    div.wpforms-container-full, div.wpforms-container-full .wpforms-form *{
        background: none;
        border: 0 none;
        border-radius: 0;
        -webkit-border-radius: 0;
        -moz-border-radius: 0;
        float: none;
        font-size: 100%;
        height: auto;
        letter-spacing: normal;
        list-style: none;
        outline: none;
        position: static;
        text-decoration: none;
        text-indent: 0;
        text-shadow: none;
        text-transform: none;
        width: auto;
        visibility: visible;
        overflow: visible;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        -ms-box-shadow: none;
        -o-box-shadow: none;
        box-shadow: none;
    }
    form{
        margin-bottom: 1.3em;
    }
    form {
        margin-bottom: 0;
    }
    div.wpforms-container-full .wpforms-form noscript.wpforms-error-noscript {
        color: #990000;
    }
    div.wpforms-container-full .wpforms-form .wpforms-field {
        padding: 10px 0;
        clear: both;
    }
    div.wpforms-container-full .wpforms-form .wpforms-recaptcha-container {
        padding: 10px 0 20px 0;
        clear: both;
    }
    div.wpforms-container-full .wpforms-form .wpforms-recaptcha-container iframe {
        width: 100%;
        max-width: 100%;
    }
    iframe{
        max-width: 100%;
    }
    div.wpforms-container-full .wpforms-form textarea {
        background-color: #fff;
        box-sizing: border-box;
        border-radius: 2px;
        color: #333;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        display: block;
        float: none;
        font-size: 16px;
        font-family: inherit;
        border: 1px solid #ccc;
        padding: 6px 10px;
        height: 38px;
        width: 100%;
        line-height: 1.3;
    }
    div.wpforms-container-full .wpforms-form textarea {
        width: 100%;
    }
    div.wpforms-container-full .wpforms-form button, div.wpforms-container-full .wpforms-form textarea {
        margin: 0;
        border: 0;
        padding: 0;
        display: inline-block;
        vertical-align: middle;
        background: none;
        height: auto;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    textarea {
        margin-bottom: 1em;
    }
    textarea {
        min-height: 120px;
        padding-top: .7em;
    }
    textarea {
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }
    textarea {
        background-color: #fff;
        border: 1px solid #ddd;
        border-radius: 0;
        box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
        box-sizing: border-box;
        color: #333;
        font-size: .97em;
        height: 2.507em;
        max-width: 100%;
        padding: 0 .75em;
        transition: color .3s,border .3s,background .3s,opacity .3s;
        vertical-align: middle;
        width: 100%;
    }
    textarea {
        overflow: auto;
    }
    textarea {
        font: inherit;
    }
    div.wpforms-container-full .wpforms-form input[type=text]{
        background-color: #fff;
        box-sizing: border-box;
        border-radius: 2px;
        color: #333;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        display: block;
        float: none;
        font-size: 16px;
        font-family: inherit;
        border: 1px solid #ccc;
        padding: 6px 10px;
        height: 38px;
        width: 100%;
        line-height: 1.3;
    }
    div.wpforms-container-full .wpforms-form input{
        margin: 0;
        border: 0;
        padding: 0;
        display: inline-block;
        vertical-align: middle;
        background: none;
        height: auto;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    input {
        touch-action: manipulation;
    }
    input{
        font: inherit;
    }
    div.wpforms-container-full .wpforms-form .wpforms-submit-container {
        padding: 10px 0 0 0;
        clear: both;
        position: relative;
    }
    div.wpforms-container-full .wpforms-form input{
        margin: 0;
        border: 0;
        padding: 0;
        display: inline-block;
        vertical-align: middle;
        background: none;
        height: auto;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    div.wpforms-container-full .wpforms-form button[type=submit]{
        background-color: #eee;
        border: 1px solid #ddd;
        color: #333;
        font-size: 1em;
        padding: 10px 15px;
    }
    div.wpforms-container-full .wpforms-form input[type=date], div.wpforms-container-full .wpforms-form input[type=datetime], div.wpforms-container-full .wpforms-form input[type=datetime-local], div.wpforms-container-full .wpforms-form input[type=email], div.wpforms-container-full .wpforms-form input[type=month], div.wpforms-container-full .wpforms-form input[type=number], div.wpforms-container-full .wpforms-form input[type=password], div.wpforms-container-full .wpforms-form input[type=range], div.wpforms-container-full .wpforms-form input[type=search], div.wpforms-container-full .wpforms-form input[type=tel], div.wpforms-container-full .wpforms-form input[type=text], div.wpforms-container-full .wpforms-form input[type=time], div.wpforms-container-full .wpforms-form input[type=url], div.wpforms-container-full .wpforms-form input[type=week], div.wpforms-container-full .wpforms-form select, div.wpforms-container-full .wpforms-form textarea {
        background-color: #fff;
        box-sizing: border-box;
        border-radius: 2px;
        color: #333;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        display: block;
        float: none;
        font-size: 16px;
        font-family: inherit;
        border: 1px solid #ccc;
        padding: 6px 10px;
        height: 38px;
        width: 100%;
        line-height: 1.3;
    }

    div.wpforms-container-full .wpforms-form textarea {
        width: 100%;
    }
</style>
