<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalog\CatalogController;
use App\Http\Controllers\showDetailController;
use App\Http\Controllers\Frontend\ProductController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Cart\CartController;

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
Route::get('/all-product',  [PageController::class, 'allProduct']);
Route::get('/checkout', function () {
    return view('Pages.checkOut');
});
Route::get('/product-detail/{idProduct}', [showDetailController::class, 'show_detail']);
Route::post('/add-cart',[showDetailController::class,'add_cart'])->name('product.addToCart');;
Route::get('/cart',[showDetailController::class,'cart'])->name('cart');
Route::get('/checkout',[showDetailController::class,'show_checkout']);
Route::post('/update-cart',[showDetailController::class,'updateCart']);
Route::post('/update-cart-summary',[CartController::class,'update_cart_summary']);
Route::get('/delete-product/{session_id}',[showDetailController::class,'deleteProduct']);
Route::post('/payment',[CartController::class,'Payment']);
Route::post('/summary',[CartController::class,'Summary']);
Route::post('/search',[\App\Http\Controllers\Frontend\HomeController::class,'Search_filter']);
Route::get('/Mug',[\App\Http\Controllers\Frontend\HomeController::class,'Show_category_mug']);
Route::get('/T-shirt',[\App\Http\Controllers\Frontend\HomeController::class,'Show_category_tshirt']);
Route::get('/Sticker',[\App\Http\Controllers\Frontend\HomeController::class,'Show_category_sticker']);
Route::get('/Poster',[\App\Http\Controllers\Frontend\HomeController::class,'Show_category_poster']);
Route::get('/Bag',[\App\Http\Controllers\Frontend\HomeController::class,'Show_category_bag']);
Route::get('/Other',[\App\Http\Controllers\Frontend\HomeController::class,'Show_category_orther']);
Route::get('/withlist',[PageController::class,'show_withlist']);
Route::get('/about-us',[PageController::class,'show_about_us']);
Route::get('/contact-us',[PageController::class,'show_contact_us']);
Route::get('/shipping-policy',[PageController::class,'show_shipping_policy']);
Route::get('/terms-of-service',[PageController::class,'show_terms_of_service']);

