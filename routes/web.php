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

Route::get('/', 'PagesController@index')->name('pages.index');
Route::resource('products', 'ProductsController', ['only' => ['index', 'show']]);
Route::resource('articles', 'ArticlesController', ['only' => ['index', 'show']]);
Route::get('contract-us', 'PagesController@contractUs')->name('pages.contract-us');
Route::get('recharge-channels', 'PagesController@rechargeChannels')->name('pages.recharge-channels');
