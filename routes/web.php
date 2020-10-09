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
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('/', 'IndexController@index')->name('home');

Route::get('/lang/{locale}', function($locale){
	session(['locale'=>$locale]);
	return back();
});

Route::get('/category/{id}', 'PageController@view')->name('view');
Route::post('/connect', 'PageController@connect');
Route::get('/product/{id}', 'ProductController@product_view')->name('product_view');


Route::get('/page/{slug}', 'PageController@about')->name('about');
Route::get('/faq', 'PageController@faq')->name('faq');
Route::get('/vacancy', 'PageController@vacancy')->name('vacancy');
Route::get('/excurse', 'PageController@excurse')->name('excurse');
Route::get('/excurse/{id}', 'PageController@excurse_view')->name('excurse_view');

//ajax
Route::post('/sortFaq', 'PageController@sortFaq');
Route::post('/sortVac', 'PageController@sortVac');
Route::post('/resume', 'PageController@resume');
Route::post('/sort_product', 'ProductController@sort_product');
Route::post('/more_product', 'ProductController@more_product');
Route::post('/getImage', 'ProductController@getImage');