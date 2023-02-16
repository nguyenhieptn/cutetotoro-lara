@extends('cutetotoro::base')

{{--@section('aimeos_header')--}}
{{--    <title>{{ __( 'Basket') }}</title>--}}
{{--    <?= $aiheader['locale/select'] ?? '' ?>--}}
{{--    <?= $aiheader['catalog/search'] ?? '' ?>--}}
{{--    <?= $aiheader['catalog/tree'] ?? '' ?>--}}
{{--    <?= $aiheader['basket/bulk'] ?? '' ?>--}}
{{--    <?= $aiheader['basket/standard'] ?? '' ?>--}}
{{--    <?= $aiheader['basket/related'] ?? '' ?>--}}
{{--@stop--}}

@section('aimeos_head_nav')
    <?= $aibody['catalog/tree'] ?? '' ?>
@stop


@section('content')
    <div class="container">
        <?= $aibody['basket/standard'] ?? '' ?>
        <?= $aibody['basket/related'] ?? '' ?>
        <?= $aibody['basket/bulk'] ?? '' ?>
    </div>
@stop