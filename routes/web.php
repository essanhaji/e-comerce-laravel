<?php

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
use Gloudemans\Shoppingcart\Facades\Cart;

Route::get('/', 'HomePageController@index')->name('home-page');

Route::get('/shop', 'shopPageController@index')->name('shop.index');
Route::get('/shop/{id}','shopPageController@show')->name('shop.show-Product');

Route::get('/cart','CartController@index')->name('cart-page');
Route::post('/cart','CartController@store')->name('cart.store');
Route::patch('/cart/{product}','CartController@update')->name('cart.updateQte');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.removeItem');

Route::get('/saveForLater',function(){
    return view('wishlist');
})->middleware('auth');
Route::post('/saveForLater','CartController@saveForLater')->name('wishlist.store')->middleware('auth'); // service just pour les clients


// Route::get('empty',function(){
//     Cart::destroy();
// });


Route::post('/coupon','CouponsController@store')->name('coupon.store');
Route::delete('/coupon','CouponsController@destroy')->name('coupon.destroy');


Route::get('/checkout', 'CheckoutController@index')->name('checkout.index')->middleware('auth');
Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');

Route::get('/my-account', 'ClientAccountController@index')->name('userAccount.index')->middleware('auth');
Route::patch('/my-accoun/{user}','ClientAccountController@update')->name('user.updateAccount');



Route::get('/blog', 'BlogController@index')->name('blog.index');
Route::get('/blog/{post_id}', 'BlogController@show')->name('blog.show-Post');

Route::get('/about',function(){
    return view('about');
});

Route::get('/contact',function(){
    return view('contact');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
