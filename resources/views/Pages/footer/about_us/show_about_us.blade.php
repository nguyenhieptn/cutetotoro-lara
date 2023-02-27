@extends('cutetotoro::base')
@section('content')
<div class="container page-wrapper">
    <div class="col-inner">
        <p>
            Welcome to
            <strong>cutetotoro.com</strong>,
            <strong>cutetotoro.com</strong>
            is an exclusive store for the world’s best animal themed apparels such as dog, cat, horse, lion, donkey, mouse and so on quilt blanket, fleece blanket, 3D shirt, shirt, online products, for the lowest prices. We are a team of products enthusiasts committing to stocking the absolute COOLEST Products possible.
        </p>
        <p>At
            <strong>cutetotoro.com</strong>,
            we are constantly at work sourcing the hottest products we know you’ll love, we pride ourselves on delivering premier products. and exceptional customer service, at the most competitive prices to our customers. We are passionate about educating all of our customers and finding products that best fit their needs, regardless of experience level.
        </p>
        <p>If you’re looking for something and can’t find it in our store, please contact us and we will be able to source it for you at a better than competitive price.</p>
        <p>We are open every day, and we are always happy to help!</p>
        <p>Thanks again for making us the one to beat.</p>
    </div>
</div>
@stop
<style>
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
    p {
        margin-top: 0;
    }
    .page-wrapper {
        padding-bottom: 30px;
        padding-top: 30px;
    }
</style>
