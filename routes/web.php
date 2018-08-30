
<?php

Route::get('/','MainPageController@index')->name('landing');

Route::get('/shop','ShopController@index')->name('shop.index');
Route::get('/shop/{product}','ShopController@show')->name('shop.show');


Route::get('/cart','CartController@index')->name('cart.index'); 
Route::post('/cart','CartController@store')->name('cart.store');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');
Route::post('/cart/switchToSaveForLater/{product}','CartController@switchToSaveLater')->name('cart.switchToSaveForLater');

Route::get('/checkout','CheckoutController@index')->name('checkout.index');
Route::post('/checkout','CheckoutController@store')->name('checkout.store');

Route::get('empty',function(){
    Cart::destroy();
});

Route::get('/search-results','ShopController@search')->name('search');



//Route::view('/shop','shop');
//Route::view('/product','product');



Route::view('/contact','contact');
Route::view('/about','about');
Route::view('/blog','blog');

Route::get('/dashboard','DashboardController@index')->name('dashboard.index');

Route::get('/profile','ProfilesController@index')->name('profile.index');
Route::post('/profile','ProfilesController@store')->name('profile.store');
Route::post('upload', 'ProfilesController@upload');

Route::get('/statistics','StatisticsController@index')->name('statistics.index');


Route::get('/productdata','ProductsDataController@index')->name('productdata.index');
Route::post('/productAdd','ProductsDataController@store')->name('products.store');

Route::post('/productEdit','ProductsDataController@edit')->name('products.edit');
Route::post('/productUpdate','ProductsDataController@update')->name('products.update');

Route::post('/productDelete','ProductsDataController@destroy')->name('products.delete');
 

Route::view('/auth/register','register');
Route::view('/auth/login','login');
Auth::routes();
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::get('/home', 'HomeController@index')->name('home');

