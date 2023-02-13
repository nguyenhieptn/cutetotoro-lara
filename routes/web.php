<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalog\CatalogController;
use App\Http\Controllers\showDetailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/ready', function () {
    return 'OK';
});

$params = [];
$conf = ['prefix' => '', 'where' => []];

if (env('SHOP_MULTILOCALE')) {
    $conf['prefix'] .= '{locale}';
    $conf['where']['locale'] = '[a-z]{2}(\_[A-Z]{2})?';
    $params = ['locale' => app()->getLocale()];
}

if (env('SHOP_MULTISHOP')) {
    $conf['prefix'] .= '/{site}';
    $conf['where']['site'] = '[A-Za-z0-9\.\-]+';
}
//if( $conf['prefix'] )
//{
//    Route::get('/{page?}', App\Http\Controllers\Frontend\PageController::page());
//}
//Route::get('/{page?}', ['App\Http\Controllers\Frontend\PageController', 'page']);
Route::match(array('GET', 'POST'), '/', array(
    'as'   => 'home',
    'uses' => 'App\Http\Controllers\Frontend\PageController@page'
))->where(['locale' => '[a-z]{2}(\_[A-Z]{2})?', 'site' => '[A-Za-z0-9\.\-]+']);
Route::get('shop/basket', 'App\Http\Controllers\Frontend\CartController@index')->name('cart');
Route::group($conf ?? [], function () {
    require __DIR__ . '/auth.php';
});
// catalog
Route::get('/product/{id}', 'App\Http\Controllers\Frontend\ProductController@detail')->name('product.detail');
//Route::get('/product/{id}/add-to-card', 'App\Http\Controllers\Frontend\ProductController@addToCart')->name('product.addToCart');
Route::get('/all-product', function () {
    return view('Pages.allProduct');
});
Route::get('/checkout', function () {
    return view('Pages.checkOut');
});
Route::get('/product-detail/{idProduct}', [showDetailController::class, 'show_detail']);
Route::post('/add-cart',[showDetailController::class,'add_cart'])->name('product.addToCart');;
Route::get('/cart',[showDetailController::class,'cart']);
Route::get('/checkout',[showDetailController::class,'show_checkout']);
Route::post('/update-cart',[showDetailController::class,'updateCart']);
Route::get('/delete-product/{session_id}',[showDetailController::class,'deleteProduct']);