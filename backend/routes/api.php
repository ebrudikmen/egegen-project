<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//News routes...
Route::group(['prefix' => 'newses'], function () {
    Route::get('/', 'NewsController@index')->name('news.index');
    Route::post('create', 'NewsController@store')->name('news.store');
    Route::get('{news}', 'NewsController@show')->name('news.show');
    Route::put('{news}', 'NewsController@update')->name('news.update');
    Route::delete('{news}', 'NewsController@delete')->name('news.delete');
});

//Menu routes...
Route::group(['prefix' => 'menus'], function () {
    Route::get('/', 'MenuController@index')->name('menu.index');
    Route::post('create', 'MenuController@store')->name('menu.store');
    Route::get('{menu}', 'MenuController@show')->name('menu.show');
    Route::put('{menu}', 'MenuController@update')->name('menu.update');
    Route::delete('{menu}', 'MenuController@delete')->name('menu.delete');
});

//Content routes...
Route::group(['prefix' => 'contents'], function () {
    Route::get('/', 'ContentController@index')->name('content.index');
    Route::post('create', 'ContentController@store')->name('content.store');
    Route::get('{content}', 'ContentController@show')->name('content.show');
    Route::put('{content}', 'ContentController@update')->name('content.update');
    Route::delete('{content}', 'ContentController@delete')->name('content.delete');
});

//Media routes...
Route::group(['prefix' => 'medias'], function () {
    Route::get('/', 'MediaController@index')->name('media.index');
    Route::post('create', 'MediaController@store')->name('media.store');
    Route::get('{media}', 'MediaController@show')->name('media.show');
    Route::put('{media}', 'MediaController@update')->name('media.update');
    Route::delete('{media}', 'MediaController@delete')->name('media.delete');
});
