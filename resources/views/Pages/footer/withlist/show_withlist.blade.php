@extends('cutetotoro::base')
@section('content')
    <div class="container">
        <div class="wishlist-title-container page-wrapper" style="font-size: 17px; font-family: 'Manjari', sans-serif">
            <div class="wishlist-title">
                <p>My wishlist</p>
            </div>
        </div>
        <table class="shop_table cart wishlist_table wishlist_view traditional responsive   " data-pagination="no" data-per-page="5" data-page="1" data-id="" data-token="">
            <thead>
                <tr>
                    <th class="product-remove">
                        <span class="nobr"></span>
                    </th>
                    <th class="product-thumbnail"></th>
                    <th class="product-name">
                        <span class="nobr" style="font-size: 16px; font-family: 'Manjari', sans-serif">Product name </span>
                    </th>
                </tr>
            </thead>
            <tbody class="wishlist-items-wrapper">
                <tr>
                    <td colspan="3" class="wishlist-empty" style="font-size: 16px; font-family: 'Manjari', sans-serif">No products added to the wishlist</td>
                </tr>
            </tbody>
        </table>
    </div>
@stop
<style>
    @import url('https://fonts.googleapis.com/css2?family=Manjari:wght@100;700&display=swap');
    .wishlist-title {
        margin-bottom: 20px
    }
    h2{
        font-weight: 700;
        font-style: normal;
    }
    table {
        border-color: #ececec;
        border-spacing: 0;
        margin-bottom: 1em;
        width: 100%;
    }
    .shop_table thead th {
        border-width: 3px;
    }
    th:first-child, td:first-child {
        padding-left: 0;
    }
    th {
        letter-spacing: .05em;
        line-height: 1.05;
        text-transform: uppercase;
    }
    tr>th {
        border-bottom: 1px solid #ececec;
        font-size: 16px;
        line-height: 1.3;
        padding: .5em;
        text-align: left;
        border-left: none;
        border-top: none;
        border-right: none;
    }
    .shop_table thead th {
        border-width: 3px;
    }
    .shop_table thead tr th:last-of-type{
        text-align: right;
    }
    .shop_table th:last-child {
        border-right: 0;
    }
    .shop_table thead th {
        border-width: 3px;
    }
    th.product-name {
        border-top: 0;
        border-left: 0;
        border-right: 0;
    }
    th:last-child, td:last-child{
        padding-right: 0;
    }
    .shop_table tr td:last-of-type{
        text-align: right;
    }
    td.wishlist-empty {
        text-align: center!important;
        padding: 50px;
        font-size: 2em;
    }
    td {
        color: #666;
    }
    td{
        border-bottom: 1px solid #ececec;
        font-size: .9em;
        line-height: 1.3;
        padding: .5em;
        text-align: left;
    }
    .page-wrapper {
        padding-bottom: 30px;
        padding-top: 30px;
    }
</style>
