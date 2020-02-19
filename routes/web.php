<?php

use App\Category;



Auth::routes();

Route::group(['prefix' => 'dashboard' , 'middleware' => 'auth'], function(){

    Route::get('/','Dashboard\AdminController@firstPage')->name('dashboard.index');
    Route::resource('users','Dashboard\AdminController');
    Route::resource('/products','Dashboard\ItemController');
    Route::resource('/categories','Dashboard\CategoryController');
    Route::resource('/subcategories','Dashboard\Sub_CategoryController');
    Route::resource('ads','Dashboard\AdsController');

});


Route::get('/categories/{id}/show','Website\ItemController@index')->name('categories.show');
Route::get('/items/{id}/show','Website\ItemController@show')->name('items.show');
Route::get('/','Website\IndexController@index')->name('index');
Route::get('/contact','Website\IndexController@contact')->name('contact');
Route::get('/about','Website\IndexController@about')->name('about');
Route::get('/categories/{category}','Website\IndexController@product')->name('products');
Route::get('/cart/add{id}','Website\CartController@add')->name('cart.add');
Route::get('/cart/items','Website\CartController@index')->name('cart.items');
Route::get('/cart/delete','Website\CartController@delete')->name('cart.delete');
Route::post('/cart/update/{id}','Website\CartController@update')->name('cart.update');




//Localization Lang changing
Route::get('/locale/{locale}', 'LocaleController@index')->name('lang');


Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});





